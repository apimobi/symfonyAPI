<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;

class TestController extends FOSRestController
{
    /**
      * home
      *
      * @Extra\Route("/", name="default")
      * @Extra\Method({"GET|POST"})
      */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('app_front_product_post');
        // replace this example code with whatever you need

        // return $this->render('default/index.html.twig', [
        //     'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        // ]);
    }
}
