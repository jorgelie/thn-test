<?php

namespace Tests\Unit;

use App\Domain\Entity\Room;
use PHPUnit\Framework\TestCase;

class RoomTest extends TestCase{
    
    public function testItCanCreateAReservationGivenFakeParameters()
    {
        $date = new \DateTime();
        self::assertInstanceOf(Room::class, new Room("Room Name",1));
    }

}
