<?php

namespace Tests\App\Services;

use App\Services\ProductService;

class ProductServiceTest extends  \PHPUnit_Framework_TestCase
{
    protected $productService;

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
            ->willReturn('testProduct');

        $doctrine->expects($this->any())
            ->method('persist')
            ->willReturn(true);

        $doctrine->expects($this->any())
            ->method('flush')
            ->willReturn(true);

        $doctrine->expects($this->any())
            ->method('findAll')
            ->willReturn(['product0'=>0, 'product1'=>1, 'product2'=>3]);

        $this->productService = new ProductService($this->formFactory, $doctrine);

    }

    public function testCreate()
    {

        $requestMock = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->setMethods(array('request', 'author'))->getMock();
        $requestMock->expects($this->any())
            ->method('request')
            ->willReturn($requestMock);

        $result = $this->productService->create($requestMock);
        $this->assertEquals('success', $result['message']);
    }


    public function testGetIdproduct()
    {
        $requestMock = $this->getMockBuilder('Symfony\Component\HttpFoundation\Request')->setMethods(array('request', 'get'))->getMock();
        $requestMock->expects($this->any())
            ->method('request')
            ->willReturn($requestMock);

        $requestMock->expects($this->any())
            ->method('get')
            ->willReturn('testProduct');

        $result = $this->productService->getIdproduct($requestMock);
        $this->assertEquals('testProduct', $result);

    }

    public function testGetProducts()
    {
        $result = $this->productService->getProducts();

        $this->assertGreaterThan(0, count($result));
        $this->assertArrayHasKey('product0', $result);

    }



}
