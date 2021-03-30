<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }

    // /**
    //  * @return Event[] Returns an array of Event objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */


    public function listOrderByPrice()
    {
        return $this->createQueryBuilder('s')
            ->where('s.start_date >= ?1')
            ->setParameter(1, new \DateTime())
            ->orderBy('s.price_event','ASC')
            ->getQuery()->getResult();
    }
    public function listOrderBystartDate()
    {
        return $this->createQueryBuilder('s')
            ->where('s.start_date >= ?1')
            ->setParameter(1, new \DateTime())
            ->orderBy('s.start_date','ASC')
            ->getQuery()->getResult();
    }

    /**
     *
     */

    public function findSearch($title)
    {
        return $this->createQueryBuilder('s')
            ->where('s.titre Like ?1 or s.description Like ?1')
            ->setParameter(1, '%'.$title."%")
            ->andWhere('s.start_date >= ?2')
            ->setParameter(2, new \DateTime())
            ->orderBy('s.start_date','ASC')
            ->getQuery()->getResult();

    }
    public function findEvents()
    {
        return $this->createQueryBuilder('a');
    }

    public function findByDate(){

        return $this->createQueryBuilder('p')
            ->where('p.start_date >= ?1')
            ->setParameter(1, new \DateTime())
            ->getQuery()
            ->getResult()
            ;
    }




}
