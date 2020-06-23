<?php

namespace Tests\Unit;

use App\Domain\Entity\Hotel;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;

class HotelTest extends TestCase{

    public function testItCanCreateAHotelGivenValidParameters()
    {
        self::assertInstanceOf(Hotel::class, new Hotel("Hotel 1","Hotel 1 Description","Hotel 1 Address"));
    }

    public function testItReturnsAStatusCode200WhenSearchingAnExistentHotel()
    {
        $client = new Client();

        $request = $client->request('GET','http://www.thn.local/index.php/api/hotel/getInfo/1');

        self::assertEquals('200',$request->getStatusCode());
    }

    public function testItGetsAClientExceptionWhenSearchingForANonExistentHotel()
    {
        self::expectException(ClientException::class);
        $client = new Client();

        $request = $client->request('GET','http://www.thn.local/index.php/api/hotel/getInfo/9999999999999');

    }

}
