<?php

namespace App\Application\Command\Hotel;

use App\Application\Response\Hotel\HotelSingleResponse;

class GetHotelInfo
{
    private $hotel_id;

    public function __construct(int $hotel_id)
    {
        $this->hotel_id = $hotel_id;
    }

    /**
     * @return int
     */
    public function hotelId(): int
    {
        return $this->hotel_id;
    }


}