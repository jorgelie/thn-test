<?php

namespace App\Application\Command\Hotel;

use App\Application\Exception\Hotel\HotelNotFoundException;
use App\Application\Response\Hotel\HotelSingleResponse;
use App\Domain\Repository\HotelRepository;
use Doctrine\ORM\NonUniqueResultException;

class GetHotelInfoHandler
{
    private $hotelRepository;
    private $response;

    public function __construct(HotelRepository $hotelRepository, HotelSingleResponse $hotelSingleResponse)
    {
        $this->hotelRepository = $hotelRepository;
        $this->response = $hotelSingleResponse;
    }

    public function handle(GetHotelInfo $getHotelInfo)
    {
       $hotel_id = $getHotelInfo->hotelId();
       $hotel = $this->hotelRepository->findInfo($hotel_id);

       if(!$hotel){
           throw new HotelNotFoundException(sprintf("Hotel with id %s not found",$hotel_id));
       }

       return $this->response->prepareResponse($hotel);

    }

}