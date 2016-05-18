<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\User;
use App\Form\UserType;
use App\Helper\ArrayHelper;

/**
* @Extra\Route("/user")
*/
class UserController extends FOSRestController
{
    /**
      * GET User
      *
      * @ApiDoc(
      *  section="User",
      *  resource=true,
      *  description="This method will return all the posts",
      *  statusCodes={
      *      200="Returned when successful",
      *      403="Returned when the user is not authorized",
      *      404={
      *        "Returned when the posts are not found"
      *      }
      * }
      * )
      *
      * @Extra\Route("/{id}")
      * @Extra\ParamConverter("user", options={"repository_method"="findOne"})
      * @Extra\Method({"GET"})
      * @Rest\View()
      *
      * @param Request $request
      * @param User $item
      *
      * @return json
      */
    public function getUserAction(Request $request,User $item)
    {
        return $item;
    }

    /**
      * POST User
      *
      * @ApiDoc(
      *  section="User",
      *  resource=true,
      *  description="This method will return all the posts",
      *  statusCodes={
      *      200="Returned when successful",
      *      403="Returned when the user is not authorized",
      *      404={
      *        "Returned when the posts are not found"
      *      }
      * },
      * parameters={
      *      {
      *          "name"="user[firstname]",
      *          "dataType"="string",
      *          "description"="firstname",
      *          "required"=true
      *      },
      *      {
      *          "name"="user[lastname]",
      *          "dataType"="string",
      *          "description"="lastname",
      *          "required"=true
      *      },
      *      {
      *          "name"="user[email]",
      *          "dataType"="string",
      *          "description"="email",
      *          "required"=true
      *      },
      *      {
      *          "name"="user[password]",
      *          "dataType"="string",
      *          "description"="password",
      *          "required"=true
      *      }
      * }
      * )
      *
      * @Extra\Route("/create")
      * @Extra\Method({"POST"})
      * @Rest\View()
      *
      * @param Request $request
      *
      * @return json
      */
    public function postUserAction(Request $request)
    {

      return $this->container->get('app.service.user')->create($request);

    }

    /**
      * Add Product for User
      *
      * @ApiDoc(
      *  section="User",
      *  resource=true,
      *  description="This method will return all the posts",
      *  statusCodes={
      *      200="Returned when successful",
      *      403="Returned when the user is not authorized",
      *      404={
      *        "Returned when the posts are not found"
      *      }
      * },
      * parameters={
      *      {
      *          "name"="idUser",
      *          "dataType"="int",
      *          "description"="idUser",
      *          "required"=true
      *      },
      *      {
      *          "name"="idProduct",
      *          "dataType"="int",
      *          "description"="idProduct",
      *          "required"=true
      *      }
      * }
      * )
      *
      * @Extra\Route("/addProduct")
      * @Extra\Method({"POST"})
      * @Rest\View()
      *
      * @param Request $request
      *
      * @return json
      */
    public function addProductAction(Request $request)
    {

      $idUser = $request->request->get('idUser');
      $idProduct = $request->request->get('idProduct');

      return $this->container->get('app.service.user')->addProduct($idUser, $idProduct);

    }

}
