<?php

namespace App\Repository;

use App\Entity\Physique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Physique|null find($id, $lockMode = null, $lockVersion = null)
 * @method Physique|null findOneBy(array $criteria, array $orderBy = null)
 * @method Physique[]    findAll()
 * @method Physique[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Physique::class);
    }

    // /**
    //  * @return Physique[] Returns an array of Physique objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Physique
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
