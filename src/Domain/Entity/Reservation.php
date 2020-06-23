<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\Hotel", inversedBy="reservations")
     */
    private $hotel;

    /**
     * @ORM\ManyToOne(targetEntity="App\Domain\Entity\User", inversedBy="reservations")
     */
    private $user;

    /**
     * Reservation constructor.
     * @param int $user_id
     * @param int $hotel_id
     * @param \DateTime $date
     */
    public function __construct(int $user_id, int $hotel_id, \DateTime $date)
    {
        $this->user_id = $user_id;
        $this->hotel_id = $hotel_id;
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function date(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return $this->user;
    }

    /**
     * @return Hotel
     */
    public function hotel(): Hotel
    {
        return $this->hotel;
    }
}