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


class UserService
{

  protected $container;

  public function __construct(ContainerInterface $container)
  {
      $this->container = $container;
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

          $em->persist($item);
          $em->flush();
          return ['data' => 'Ok'];
      }

      return [ 'form' => $form->createView() ];
  }

  public function addProduct( $idUser, $idProduct)
  {
      $em = $this->container->get('doctrine')->getManager();
      $productUser = $em->getRepository("App\Entity\ProductUser")->findOneBy(
              [
                'iduser'=>$idUser,
                'idproduct'=>$idProduct
              ]);

      if(!$productUser)
      {
         $productUser = new ProductUser();
         $productUser->setIduser($idUser);
         $productUser->setIdproduct($idProduct);
         $productUser->setDateupdate(new \DateTime());
         $em->persist($productUser);
         $em->flush();

         $message = "new record";
      }else{
         $message = "already exist";
      }

      return [ 'message' => $message];
  }

}
