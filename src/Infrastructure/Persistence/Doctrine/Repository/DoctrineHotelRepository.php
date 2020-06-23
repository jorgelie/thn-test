<?php

namespace App\Infrastructure\Persistence\Doctrine\Repository;

use App\Domain\Entity\Hotel;
use App\Domain\Repository\HotelRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\Exception\NonUniqueFieldNameException;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;

class DoctrineHotelRepository extends ServiceEntityRepository implements HotelRepository
{
    /**
     * DoctrineElevatorCallRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Hotel::class);
    }

    public function findInfo(int $id)
    {
        $result = [];
        try {
            $result = $this->createQueryBuilder('h')
                ->where('h.id = :hotel_id')
                ->setParameter('hotel_id',$id)
                ->getQuery()
                ->getOneOrNullResult();
        } catch (NonUniqueResultException $e){

        }
        return $result;
    }
}