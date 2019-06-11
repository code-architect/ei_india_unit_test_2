<?php
namespace TDD;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testReturnFullName()
    {
        $user = new User();
        $user->first_name   = "indranil";
        $user->surname      = "samanta";

        $this->assertEquals("indranil samanta", $user->getFullName());
    }

    public function testFullNameIsEmptyByDefault()
    {
        $this->assertEquals(' ', (new User())->getFullName());
    }
}