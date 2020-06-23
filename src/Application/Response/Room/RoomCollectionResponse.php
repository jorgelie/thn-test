<?php


namespace App\Application\Response\Room;


abstract class RoomCollectionResponse
{
    public static function prepareResponse($rooms)
    {
        $roomsArray = [];
        foreach ($rooms as $room){
            array_push(
                $roomsArray, ["name" => $room->name()]
            );
        }

        return $roomsArray;
    }
}