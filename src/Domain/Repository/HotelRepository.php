<?php

namespace App\Domain\Repository;

interface HotelRepository
{
    public function findInfo(int $id);
}