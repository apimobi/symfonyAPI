<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;

class TestController extends FOSRestController
{
    /**
      * home
      *
      * @Extra\Route("/", name="default")
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
