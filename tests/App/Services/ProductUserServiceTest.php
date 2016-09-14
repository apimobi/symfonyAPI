<?php

namespace Tests\App\Services;

use App\Services\ProductUserService;
use App\Entity\User;
use App\Entity\ProductUser;


class ProductUserServiceTest extends  \PHPUnit_Framework_TestCase
{
    protected $productUserService;
    protected $doctrine;
    protected $productUser;

    public function setup()
    {
        parent::setUp();

        $this->formFactory = $this->getMock('Symfony\Component\Form\FormFactoryInterface');
        $form = $this->getMock('Symfony\Component\Form\FormInterface');

        $this->formFactory->expects($this->any())
                          ->method('create')
                          ->willReturn($form);

        $form->expects($this->any())
                          ->method('isValid')
                          ->willReturn(true);

        $form->expects($this->any())
                          ->method('handleRequest')
                          ->willReturn(true);

        $this->doctrine  = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->setMethods(array('getManager', 'getRepository', 'findOneBy', 'persist', 'flush', 'findAll'))
            ->getMock();

        $this->doctrine->expects($this->any())->method('getManager')
            ->willReturn($this->doctrine);

        $this->doctrine->expects($this->any())
            ->method('getRepository')
            ->willReturn($this->doctrine);

        $array0 =  [
                   'iduser'=>1,
                   'idproduct'=>1
                 ];

        $array1 =  [
                    'iduser'=>1,
                    'idproduct'=>null
                  ];
        $this->productUser = $this->getMock('App\Entity\ProductUser');

        $this->doctrine->expects($this->any())
            ->method('findOneBy')
            ->with($this->logicalOr(
                $this->equalTo($array0),
                $this->equalTo($array1)
            ))
            ->will(
                $this->returnCallback(
                    function ($method) use($array0, $array1){
                        switch ($method) {
                            case $array0:
                                return $this->productUser;
                            case $array1:
                                return false;
                        }
                    }
                )
            );

        $this->doctrine->expects($this->any())
            ->method('persist')
            ->willReturn(true);

        $this->doctrine->expects($this->any())
            ->method('flush')
            ->willReturn(true);

        $user = $this->getMock('App\Entity\User');
        $user->expects($this->any())
                ->method('getIduser')
                ->willReturn(1);

        $this->token = $this->getMockBuilder('Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage')
            ->disableOriginalConstructor()
            ->setMethods(array('getToken', 'getUser'))
            ->getMock();

        $this->token->expects($this->any())
            ->method('getToken')
            ->willReturn($this->token);

        $this->token->expects($this->any())
            ->method('getUser')
            ->willReturn($user);

        $this->productUserService = new ProductUserService($this->formFactory, $this->doctrine, $this->token);

    }

    public function testPostProductUser()
    {
      $requestMock = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->setMethods(array('request'))->getMock();
      $requestMock->expects($this->any())
          ->method('request')
          ->willReturn($requestMock);

      $result = $this->productUserService->postProductUser($requestMock);
      $this->assertEquals('success', $result['message']);

    }

    public function testGetProductUser()
    {

      $product = $this->getMock('App\Entity\Product');
      $product->expects($this->any())
              ->method('getIdproduct')
              ->willReturn(1);

      $result = $this->productUserService->getProductUser($product);
      $this->assertArrayHasKey('data', $result);

    }

}
