<?php
namespace SymfonyZgz\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @author
 * @link
 *
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{
    /**
     * @var int
     * @Id
     * @Column
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;
    /**
     * @var string
     * @Column(type="string")
     */
    private $username;
    /**
     * @var string
     * @Column(type="string")
     */
    private $password;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
}
