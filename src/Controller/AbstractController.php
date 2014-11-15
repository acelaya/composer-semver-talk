<?php
namespace SymfonyZgz\Controller;

abstract class AbstractController
{
    /**
     * @var \Twig_environment
     */
    protected $renderer;

    public function __construct(\Twig_Environment $renderer)
    {
        $this->renderer = $renderer;
    }
}
