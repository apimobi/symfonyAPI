<?php

namespace App\Controller\front;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\User;
use App\Form\UserType;
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
      * @Template
      */
    public function postAction(Request $request)
    {
        return $this->container->get('app.service.user')->create($request);
    }
}
