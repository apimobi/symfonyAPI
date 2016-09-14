<?php

namespace App\Services;

use Symfony\Component\HttpFoundation\Request;
use App\Entity\Product;
use App\Form\Type\ProductType;
use Symfony\Component\Form\FormFactoryInterface;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;


class ProductService
{

  protected $forms;
  protected $doctrine;

  /**
   *
   * @param FormFactoryInterface $forms
   * @param Doctrine             $doctrine
   */
  public function __construct(FormFactoryInterface $forms, Doctrine $doctrine)
  {
      $this->forms = $forms;
      $this->doctrine = $doctrine;
  }


  /**
   *
   * @param  Request $request
   * @return
   */
  public function create(Request $request)
  {

      $item = new Product();
      $form = $this->forms->create(ProductType::class, $item, array( 'action' => 'post'));
      $form->handleRequest($request);

      if ($form->isValid()) {
          $em = $this->doctrine->getManager();

          $em->persist($item);
          $em->flush();
          return [
            'message' => 'success',
            'form'    => $this->forms->create(ProductType::class, new Product())
          ];
      }else if(!$form->isValid() && $form->isSubmitted()){
        return [
          'message' => 'error',
          'form'    => $form
        ];
      }

      return [ 'message' => '', 'form' => $form ];
  }

  /**
   * @param  Request $request
   * @return Product
   */
  public function getIdproduct(Request $request)
  {
      $em = $this->doctrine->getManager();

      $product = $em->getRepository("App\Entity\Product")->findOneBy(
              [
                'about'=>$request->request->get('product')
              ]);
      if($product)
      {
         return $product;
      }else{
         return 'Not found';
      }

  }

  /**
   * @param  Request $request
   * @return Array
   */
  public function getProducts()
  {
      $em = $this->doctrine->getManager();

      $products = $em->getRepository("App\Entity\Product")->findAll();

      if($products)
      {
         return $products;
      }else{
         return 'Not found';
      }

  }

}
