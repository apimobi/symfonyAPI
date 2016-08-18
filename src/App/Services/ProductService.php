<?php

namespace App\Services;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\Product;
use App\Form\Type\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;


class ProductService implements ContainerAwareInterface
{
  use ContainerAwareTrait;

  protected $container;

  /*
   * @parameter  Request $request
   * @return
   */
  public function create(Request $request)
  {

      $item = new Product();
      $form = $this->container->get('form.factory')->create(ProductType::class, $item);
      $form->handleRequest($request);

      if ($form->isValid()) {
          $em = $this->container->get('doctrine')->getManager();

          $em->persist($item);
          $em->flush();
          return [
            'message' => 'success',
            'form'    => $this->container->get('form.factory')->create(ProductType::class, new Product())
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
      $em = $this->container->get('doctrine')->getManager();

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
  public function getProducts(Request $request)
  {
      $em = $this->container->get('doctrine')->getManager();

      $products = $em->getRepository("App\Entity\Product")->findAll();

      if($products)
      {
         return $products;
      }else{
         return 'Not found';
      }

  }

}
