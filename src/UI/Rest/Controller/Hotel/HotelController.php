<?php

namespace App\UI\Rest\Controller\Hotel;

use App\Application\Command\Hotel\GetHotelInfo;
use App\Application\Exception\Hotel\HotelNotFoundException;
use App\Domain\Entity\Hotel;
use League\Tactician\CommandBus;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class HotelController extends AbstractController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function index($hotel_id)
    {
        try{
            $hotel = $this->commandBus->handle(
                new GetHotelInfo($hotel_id)
            );
        } catch (HotelNotFoundException $e){
            $response = new JsonResponse(['error' => $e->getMessage()]);
            $response->setStatusCode(404);
            return $response;
        }

        return new JsonResponse($hotel);
    }
}