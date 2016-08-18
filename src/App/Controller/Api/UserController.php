<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\User;
use App\Entity\Product;

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
      *          "name"="product_user[idProduct]",
      *          "dataType"="integer",
      *          "description"="idProduct",
      *          "required"=true
      *      },
      *      {
      *          "name"="product_user[total]",
      *          "dataType"="integer",
      *          "description"="total",
      *          "required"=false
      *      }
      * }
      * )
      *
      * @Extra\Route("/postProductUser")
      * @Extra\Method({"POST"})
      * @Rest\View()
      *
      * @param Request $request
      *
      * @return json
      */
    public function postProductAction(Request $request)
    {
      return $this->container->get('app.service.productuser')->postProductUser($request);
    }

    /**
      * Get Product User
      *
      * @ApiDoc(
      *  section="User",
      *  resource=true,
      *  description="This method return Product User",
      *  statusCodes={
      *      200="Returned when successful",
      *      403="Returned when the user is not authorized",
      *      404={
      *        "Returned when the posts are not found"
      *      }
      * }
      * )
      *
      * @Extra\Route("/getProductUser/{id}")
      * @Extra\ParamConverter("product")
      * @Extra\Method({"GET"})
      * @Rest\View()
      *
      * @param Request $request
      * @param Product $product
      * @return json
      */
    public function getProductAction(Request $request, Product $product)
    {
      return $this->container->get('app.service.productuser')->getProductUser($product);
    }


}
