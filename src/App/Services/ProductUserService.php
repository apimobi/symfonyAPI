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
use App\Form\ProductUserType;
use App\Form\UserType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ProductUserService
{

  protected $container;
  protected $user;

  public function __construct(ContainerInterface $container)
  {
      $this->container = $container;
      $this->user = $this->container->get('security.token_storage')->getToken()->getUser();
  }


  public function postProductUser($request)
  {
      $em = $this->container->get('doctrine')->getManager();
      $idProduct = $request->request->get('product_user')['idProduct'];
      $total = $request->request->get('product_user')['total'];

      $productUser = $em->getRepository("App\Entity\ProductUser")->findOneBy(
              [
                'iduser'=>$this->user->getIduser(),
                'idproduct'=>$idProduct
              ]);

      if(!$productUser)
      {
         $productUser = new ProductUser();
      }

      $form = $this->container->get('form.factory')->create(ProductUserType::class, $productUser);
      $form->handleRequest($request);

      if ($form->isValid()) {

              $productUser->setIduser($this->user->getIduser());
              $productUser->setIdproduct($idProduct);
              $productUser->setTotal($total);
              $productUser->setDateupdate(new \DateTime());
              $em->persist($productUser);
              $em->flush();

              return [
                'message' => 'success',
                'entity'    => $productUser
              ];

      }else if(!$form->isValid() && $form->isSubmitted()){
        return [
          'message' => 'error',
          'form'    => $form->getErrorMessages()
        ];
      }

      return [ 'form' => $form->createView() ];


  }

  public function getProductUser($product)
  {
      $em = $this->container->get('doctrine')->getManager();
      $return = [];

      if($product)
      {

          $productUser = $em->getRepository("App\Entity\ProductUser")->findOneBy(
                  [
                    'iduser'=>$this->user->getIduser(),
                    'idproduct'=>$product->getIdproduct()
                  ]);

          if($productUser)
          {
             $return['data'] = $productUser;
          }else{
             $return['message'] = "Not found";
          }
      }else{
        $return['message'] = "Not found";
      }

      return $return;
  }


}
