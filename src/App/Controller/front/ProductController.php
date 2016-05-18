<?php

namespace App\Controller\front;

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

/**
  *
  * @Extra\Route("/product")
  */
class ProductController extends FOSRestController
{

    /**
      *
      * @Extra\Route("/post")
      * @Template
      */
    public function postAction(Request $request)
    {

        $result = $this->container->get('app.service.product')->create($request);

        $showModal = false;
        if($result['message'] == 'success')  $showModal = true;

        return [
                'form' => $result['form']->createView(),
                'showModal' => $showModal
               ];
        // return $this->container->get('app.service.product')->create($request);
    }
}
