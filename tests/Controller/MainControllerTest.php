<?php
namespace SymfonyZgz\Test\Controller;

use PHPUnit_Framework_TestCase as TestCase;
use SymfonyZgz\Controller\MainController;

/**
 * Class MainControllerTest
 * @author
 * @link
 */
class MainControllerTest extends TestCase
{
    /**
     * @var MainController
     */
    private $controller;

    public function setUp()
    {
        $twig = new \Twig_Environment(new \Twig_Loader_Array([
            'index.html.twig' => '<div>{{ \'Hello World!\' }}</div>'
        ]));
        $this->controller = new MainController($twig);
    }

    public function testIndexAction()
    {
        $this->assertEquals('<div>Hello World!</div>', $this->controller->indexAction());
    }
}
