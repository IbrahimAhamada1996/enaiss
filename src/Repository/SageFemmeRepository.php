<?php

namespace App\Repository;

use App\Entity\SageFemme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SageFemme|null find($id, $lockMode = null, $lockVersion = null)
 * @method SageFemme|null findOneBy(array $criteria, array $orderBy = null)
 * @method SageFemme[]    findAll()
 * @method SageFemme[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SageFemmeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SageFemme::class);
    }

    // /**
    //  * @return SageFemme[] Returns an array of SageFemme objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SageFemme
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
