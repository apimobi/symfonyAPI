<?php

namespace Tests\App\Services;

use App\Services\UserService;

class ProductUserServiceTest extends  \PHPUnit_Framework_TestCase
{
    protected $productUserService;

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


        $doctrine  = $this->getMockBuilder('Doctrine\Bundle\DoctrineBundle\Registry')
            ->disableOriginalConstructor()
            ->setMethods(array('getManager', 'getRepository', 'findOneBy', 'persist', 'flush', 'findAll'))
            ->getMock();

        $doctrine->expects($this->any())->method('getManager')
            ->willReturn($doctrine);

        $doctrine->expects($this->any())
            ->method('getRepository')
            ->willReturn($doctrine);

        $doctrine->expects($this->any())
            ->method('findOneBy')
            ->willReturn('testUser');

        $doctrine->expects($this->any())
            ->method('persist')
            ->willReturn(true);

        $doctrine->expects($this->any())
            ->method('flush')
            ->willReturn(true);

        $this->productUserService = new ProductUserService($this->formFactory, $doctrine);

    }

    public function testCreate()
    {
      $requestMock = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->setMethods(array('request', 'author'))->getMock();
      $requestMock->expects($this->any())
          ->method('request')
          ->willReturn($requestMock);

      $result = $this->userService->create($requestMock);
      $this->assertEquals('already exist', $result['message']);

    }

}
