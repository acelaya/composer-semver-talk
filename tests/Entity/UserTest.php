<?php
namespace SymfonyZgz\Test\Entity;

use PHPUnit_Framework_TestCase as TestCase;
use SymfonyZgz\Entity\User;

/**
 * Class UserTest
 * @author
 * @link
 */
class UserTest extends TestCase
{
    /**
     * @var User
     */
    private $user;

    public function setUp()
    {
        $this->user = new User();
    }

    public function testId()
    {
        $this->assertNull($this->user->getId());
        $this->assertSame($this->user, $this->user->setId(5));
        $this->assertEquals(5, $this->user->getId());
    }

    public function testUsername()
    {
        $this->assertNull($this->user->getUsername());
        $this->assertSame($this->user, $this->user->setUsername('foobar'));
        $this->assertEquals('foobar', $this->user->getUsername());
    }

    public function testPassword()
    {
        $this->assertNull($this->user->getPassword());
        $this->assertSame($this->user, $this->user->setPassword('******'));
        $this->assertEquals('******', $this->user->getPassword());
    }
}
