<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Form\Type\UserType;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;

class UserService
{

  protected $user;
  protected $forms;
  protected $doctrine;
  protected $security;

  /**
   *
   * @param FormFactoryInterface $forms
   * @param Doctrine             $doctrine
   */
  public function __construct(FormFactoryInterface $forms, Doctrine $doctrine, $secret)
  {
      $this->forms = $forms;
      $this->doctrine = $doctrine;
      $this->secret =  $secret;
  }

  /*
   * @parameter  Request $request
   * @return
   */
  public function create(Request $request)
  {

      $item = new User();
      $form = $this->forms->create(UserType::class, $item);
      $form->handleRequest($request);

      if ($form->isValid()) {

          $em = $this->doctrine->getManager();

          $user = $em->getRepository("App\Entity\User")->findOneBy(
                  [
                    'email'=>$item->getEmail()
                  ]);
          if(!$user)
          {
              $em->persist($item);
              $em->flush();
              $apiKey = md5($item->getEmail().$this->secret.microtime());
              $item->setApiKey($apiKey);
              $em->persist($item);
              $em->flush();
              return [
                  'data'   => 'Ok',
                  'apiKey' => $apiKey
                  ];
          }else{
            return [
                'message'   => 'already exist',
                ];
          }
      }

      return [ 'form' => $form->createView() ];
  }

}
