<?php

namespace App\Repository;

use App\Entity\ReservationProduct;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReservationProduct|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReservationProduct|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReservationProduct[]    findAll()
 * @method ReservationProduct[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservationProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReservationProduct::class);
    }

    // /**
    //  * @return ReservationProduct[] Returns an array of ReservationProduct objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReservationProduct
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
