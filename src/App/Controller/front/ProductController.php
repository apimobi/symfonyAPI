<?php

namespace App\Controller\front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
  *
  * @Extra\Route("/product")
  */
class ProductController extends FOSRestController
{

    /**
      *
      * @Extra\Route("/")
      * @Extra\Method({"GET"})
      * @Template
      */
    public function indexAction(Request $request)
    {

        $result = $this->container->get('app.service.product')->create($request);

        return [
                'form' => $result['form']->createView()
               ];
    }


    /**
      *
      * @Extra\Route("/post")
      * @Extra\Method({"POST"})
      * @Template
      */
    public function postAction(Request $request)
    {

        $result = $this->container->get('app.service.product')->create($request);

        $showModal = false;
        if($result['message'] == 'success')
        {
          $showModal = true;

          return [
                  'form' => $result['form']->createView(),
                  'showModal' => $showModal
                 ];
        }else{
          return $this->redirectToRoute('app_front_product_index', [
                  'request' => $request
                ], 302);
        }
    }

}
