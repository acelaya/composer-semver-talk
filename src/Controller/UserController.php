<?php
namespace SymfonyZgz\Controller;

use Symfony\Component\HttpFoundation\Request;
use SymfonyZgz\Service\UserServiceInterface;

/**
 * Class UserController
 * @author
 * @link
 */
class UserController extends AbstractController
{
    protected $userService;

    public function __construct(UserServiceInterface $userService, \Twig_Environment $renderer)
    {
        parent::__construct($renderer);
        $this->userService = $userService;
    }

    public function listAction()
    {

    }

    public function createAction(Request $request)
    {

    }

    public function editAction(Request $request, $id)
    {

    }

    public function deleteAction($id)
    {

    }
}
