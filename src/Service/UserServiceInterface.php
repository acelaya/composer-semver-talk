<?php
namespace SymfonyZgz\Service;

use SymfonyZgz\Entity\User;

/**
 * Interface UserServiceInterface
 * @author
 * @link
 */
interface UserServiceInterface
{
    /**
     * @return User[]
     */
    public function getUsers();

    /**
     * @param $userId
     * @return User
     */
    public function getUser($userId);

    /**
     * @param array $userData
     */
    public function createUser(array $userData);

    /**
     * @param array $userData
     */
    public function updateUser(array $userData);

    /**
     * @param $userId
     */
    public function deleteUser($userId);
}
