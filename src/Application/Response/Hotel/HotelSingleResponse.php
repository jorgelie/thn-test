<?php

namespace App\Application\Response\Hotel;

use App\Application\Response\Reservation\ReservationCollectionResponse;
use App\Application\Response\Room\RoomCollectionResponse;
use App\Domain\Entity\Hotel;

class HotelSingleResponse
{
    /**
     * @param Hotel $hotel
     * @return array
     */
    public function prepareResponse(Hotel $hotel): array
    {
        $reservations = ReservationCollectionResponse::prepareResponse($hotel->reservations());
        $rooms = RoomCollectionResponse::prepareResponse($hotel->rooms());

        return [
            "hotel" =>
            [
                "name" => $hotel->name(),
                "description" => $hotel->description(),
                "address" => $hotel->address(),
                "rooms" => $rooms,
                "reservations" => $reservations
            ]
        ];

    }
}