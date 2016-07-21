<?php

namespace App\Services;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\User;
use App\Entity\ProductUser;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;


class UserService implements ContainerAwareInterface
{
  use ContainerAwareTrait;

  protected $container;
  protected $user;

  public function init($secret)
  {
     $this->secret =  $secret;
     $this->user = $this->container->get('security.token_storage')->getToken()->getUser();
  }

  /*
   * @parameter  Request $request
   * @return
   */
  public function create(Request $request)
  {

      $item = new User();
      $form = $this->container->get('form.factory')->create(UserType::class, $item);
      $form->handleRequest($request);

      if ($form->isValid()) {

          $em = $this->container->get('doctrine')->getManager();

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
