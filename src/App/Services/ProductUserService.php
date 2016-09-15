<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\ProductUser;
use App\Entity\Product;
use App\Form\Type\ProductUserType;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class ProductUserService
{

  protected $forms;
  protected $doctrine;
  protected $user;

  /**
   *
   * @param FormFactoryInterface $forms
   * @param Doctrine             $doctrine
   */
  public function __construct(FormFactoryInterface $forms, Doctrine $doctrine, TokenStorage $security)
  {
      $this->forms = $forms;
      $this->doctrine = $doctrine;
      $this->user = $security->getToken()->getUser();
  }

  public function postProductUser(Request $request)
  {
      $em = $this->doctrine->getManager();
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

      $form = $this->forms->create(ProductUserType::class, $productUser);
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

  public function getProductUser(Product $product)
  {
      $em = $this->doctrine->getManager();

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
