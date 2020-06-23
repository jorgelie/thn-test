<?php

namespace Tests\Unit;

use App\Domain\Entity\Reservation;
use PHPUnit\Framework\TestCase;

class ReservationTest extends TestCase{
    
    public function testItCanCreateAReservationGivenFakeParameters()
    {
        $date = new \DateTime();
        self::assertInstanceOf(Reservation::class, new Reservation(1,1,$date));
    }

}
