<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=256)
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="App\Domain\Entity\Room", mappedBy="hotel")
     */
    private $rooms;

    /**
     * @ORM\OneToMany(targetEntity="App\Domain\Entity\Reservation", mappedBy="hotel")
     */
    private $reservations;

    /**
     * Hotel constructor.
     * @param string $name
     * @param string $description
     * @param string $address
     */
    public function __construct(
        string $name,
        string $description,
        string $address)
    {
        $this->name = $name;
        $this->description = $description;
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function address(): string
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function reservations()
    {
        return $this->reservations;
    }

    /**
     * @return mixed
     */
    public function rooms()
    {
        return $this->rooms;
    }
}