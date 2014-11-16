<?php
namespace SymfonyZgz\Controller;

use Symfony\Component\HttpFoundation\RedirectResponse;
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
        return $this->renderer->render('users/list.html.twig', [
            'users' => $this->userService->getUsers()
        ]);
    }

    public function createAction(Request $request)
    {
        if ($request->isMethod('POST')) {
            $userData = $request->get('user');
            $this->userService->createUser($userData);
            return new RedirectResponse($request->getBasePath() . '/users');
        }

        return $this->renderer->render('users/form.html.twig');
    }

    public function editAction(Request $request, $id)
    {
        $user = $this->userService->getUser($id);
        if ($request->isMethod('POST')) {
            $userData = $request->get('user');
            $this->userService->updateUser($userData);
            return new RedirectResponse($request->getBasePath() . '/users');
        }

        return $this->renderer->render('users/form.html.twig', ['user' => $user]);
    }

    public function deleteAction(Request $request, $id)
    {
        if ($request->isMethod('POST')) {
            $userData = $request->get('user');
            $this->userService->deleteUser($id);
            return new RedirectResponse($request->getBasePath() . '/users');
        }

        return $this->renderer->render('users/delete.html.twig', [
            'user' => $this->userService->getUser($id)
        ]);
    }
}
