<?php

namespace Tests\Unit;

use App\Domain\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase{
    
    public function testItCanCreateAnUserGivenValidParameters()
    {
        self::assertInstanceOf(User::class, new User("Test"));
    }

}
