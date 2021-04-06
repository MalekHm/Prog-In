<?php

namespace App\Repository;

use App\Entity\CommentsPlace;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CommentsPlace|null find($id, $lockMode = null, $lockVersion = null)
 * @method CommentsPlace|null findOneBy(array $criteria, array $orderBy = null)
 * @method CommentsPlace[]    findAll()
 * @method CommentsPlace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CommentsPlaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CommentsPlace::class);
    }

    // /**
    //  * @return CommentsPlace[] Returns an array of CommentsPlace objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CommentsPlace
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
