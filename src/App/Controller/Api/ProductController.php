<?php

namespace App\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration as Extra;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View as View;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use App\Entity\Product;
use App\Form\ProductType;
use App\Helper\ArrayHelper;

/**
* @Extra\Route("/product")
*/
class ProductController extends FOSRestController
{
    /**
      * GET Product
      *
      * @ApiDoc(
      *  section="Product",
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
      * @Extra\ParamConverter("product", options={"repository_method"="findOne"})
      * @Extra\Method({"GET"})
      * @Rest\View()
      *
      * @param Request $request
      * @param Product $item
      *
      * @return json
      */
    public function getProductAction(Request $request,Product $item)
    {
        return $item;
    }

    /**
      * POST Product
      *
      * @ApiDoc(
      *  section="Product",
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
      *          "name"="product[about]",
      *          "dataType"="string",
      *          "description"="about",
      *          "required"=true
      *      },
      *      {
      *          "name"="product[author]",
      *          "dataType"="integer",
      *          "description"="author",
      *          "required"=false
      *      },
      *      {
      *          "name"="product[datePublished][year]",
      *          "dataType"="int",
      *          "description"="datePublished",
      *          "required"=false
      *      },
      *      {
      *          "name"="product[datePublished][month]",
      *          "dataType"="int",
      *          "description"="datePublished",
      *          "required"=false
      *      },
      *      {
      *          "name"="product[datePublished][day]",
      *          "dataType"="int",
      *          "description"="datePublished",
      *          "required"=false
      *      },
      *      {
      *          "name"="product[keywords]",
      *          "dataType"="string",
      *          "description"="keywords",
      *          "required"=true
      *      },
      *      {
      *          "name"="product[text]",
      *          "dataType"="string",
      *          "description"="text",
      *          "required"=true
      *      },
      *      {
      *          "name"="product[aggregateRating]",
      *          "dataType"="integer",
      *          "description"="aggregateRating",
      *          "required"=true
      *      },
      *      {
      *          "name"="product[image]",
      *          "dataType"="string",
      *          "description"="image",
      *          "required"=true
      *      },
      *      {
      *          "name"="product[url]",
      *          "dataType"="string",
      *          "description"="url",
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
    public function postProductAction(Request $request)
    {


      // $item = new Product();
      // $form = $this->createForm(ProductType::class, $item);
      // $form->handleRequest($request);
      //
      // var_dump($form->isValid());
      // // var_dump($form['about']->getErrors());
      // die;
      //
      //
      // if ($form->isValid()) {
      //     $em = $this->get('doctrine')->getManager();
      //
      //     $em->persist($item);
      //     $em->flush();
      //     return ['data' => 'Ok'];
      // }

      return $this->container->get('app.service.product')->create($request);

    }



}
