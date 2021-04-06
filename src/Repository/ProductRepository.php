<?php

namespace App\Repository;

use App\Data\SearchData;
use App\Data\SearchDatap;
use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;


/**
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry , PaginatorInterface $paginator)
    {
        parent::__construct($registry, Product::class);
        $this->paginator = $paginator;
    }

    /**
     * @return PaginationInterface
     */

    public function findSearch(SearchDatap $search) : PaginationInterface
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('c' , 'p')
            ->join('p.categoryProduct', 'c');

        if (!empty($search-> q))
        {
            $query = $query
                ->andWhere('p.name LIKE :q')
                ->setParameter('q',$search->q);
        }
        if (!empty($search-> min))
        {
            $query = $query
                ->andWhere('p.price >= :min')
                ->setParameter('min', $search->min);
        }
        if (!empty($search-> max))
        {
            $query = $query
                ->andWhere('p.price <= :max')
                ->setParameter('max', $search->max);
        }
        if (!empty($search-> mini))
        {
            $query = $query
                ->andWhere('p.pricer >= :mini')
                ->setParameter('mini', $search->mini);
        }
        if (!empty($search-> maxi))
        {
            $query = $query
                ->andWhere('p.pricer <= :maxi')
                ->setParameter('maxi', $search->maxi);
        }
        if (!empty($search-> categories))
        {
            $query = $query
                ->andWhere('c.id IN (:categories)')
                ->setParameter('categories', $search->categories);
        }

        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
            4
        );

    }
    public function findProducts()
    {
        return $this->createQueryBuilder('a');
    }
}