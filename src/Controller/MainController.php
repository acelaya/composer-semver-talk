<?php
namespace SymfonyZgz\Controller;

/**
 * Class MainController
 * @author
 * @link
 */
class MainController extends AbstractController
{
    public function indexAction()
    {
        return $this->renderer->render('index.html.twig');
    }
}
