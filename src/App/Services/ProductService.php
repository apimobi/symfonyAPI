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
use App\Form\ProductType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ProductService
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

}
