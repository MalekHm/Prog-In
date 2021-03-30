<?php

namespace App\Repository;

use App\Entity\Publicity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Publicity|null find($id, $lockMode = null, $lockVersion = null)
 * @method Publicity|null findOneBy(array $criteria, array $orderBy = null)
 * @method Publicity[]    findAll()
 * @method Publicity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Publicity::class);
    }


    public function findByDate($position){

        return $this->createQueryBuilder('p')
            ->where('p.startDatePub <= ?1 and p.endDatePub >= ?1')
            ->andWhere('p.position = :val')
            ->setParameter('val', $position)
            ->setParameter(1, new \DateTime())
            ->getQuery()
            ->getResult()
            ;
    }
}
