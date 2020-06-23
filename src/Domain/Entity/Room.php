<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Room
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length=64)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $hotel_id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\Hotel", inversedBy="rooms")
     */
    private $hotel;

    /**
     * Reservation constructor.
     * @param string $name
     */
    public function __construct(string $name, int $hotel_id)
    {
        $this->name = $name;
        $this->hotel_id = $hotel_id;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function hotel(): Hotel
    {
        return $this->hotel;
    }

}