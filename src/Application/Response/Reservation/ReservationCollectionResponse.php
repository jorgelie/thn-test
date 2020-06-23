<?php


namespace App\Application\Response\Reservation;


abstract class ReservationCollectionResponse
{
    public static function prepareResponse($reservations)
    {
        $reservationsArray = [];
        foreach ($reservations as $reservation){
            $reservation_item = [
                "user" => $reservation->user()->name(),
                "date" => $reservation->date()
            ];

            array_push(
                $reservationsArray, $reservation_item
            );
        }

        return $reservationsArray;
    }
}