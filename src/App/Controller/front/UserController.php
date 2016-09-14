<?php

namespace App\Controller\front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
  *
  * @Extra\Route("/user", name="user")
  */
class UserController extends FOSRestController
{

    /**
      *
      * @Extra\Route("/post")
      * @Extra\Method({"POST"})
      * @Template
      */
    public function postAction(Request $request)
    {
        return $this->container->get('app.service.user')->create($request);
    }
}
