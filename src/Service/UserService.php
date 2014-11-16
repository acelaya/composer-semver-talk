<?php
namespace SymfonyZgz\Service;

use Doctrine\Common\Persistence\ObjectManager;
use SymfonyZgz\Entity\User;

/**
 * Class UserService
 * @author
 * @link
 */
class UserService implements UserServiceInterface
{
    /**
     * @var ObjectManager
     */
    protected $objectManager;

    public function __construct(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * @return User[]
     */
    public function getUsers()
    {
        return $this->objectManager->getRepository(User::class)->findAll();
    }

    /**
     * @param $userId
     * @return User
     */
    public function getUser($userId)
    {
        return $this->objectManager->find(User::class, $userId);
    }

    /**
     * @param array $userData
     */
    public function createUser(array $userData)
    {
        $user = new User();
        $user->exchangeArray($userData);
        $this->objectManager->persist($user);
        $this->objectManager->flush();
    }

    /**
     * @param array $userData
     */
    public function updateUser(array $userData)
    {
        $id = $userData['id'];
        /** @var User $user */
        $user = $this->objectManager->find(User::class, $id);
        $user->exchangeArray($userData);
        $this->objectManager->flush();
    }

    /**
     * @param $userId
     */
    public function deleteUser($userId)
    {
        $user = $this->objectManager->find(User::class, $userId);
        $this->objectManager->remove($user);
        $this->objectManager->flush();
    }
}
 