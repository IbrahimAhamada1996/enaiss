<?php

namespace App\Repository;

use App\Entity\LieuTravail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method LieuTravail|null find($id, $lockMode = null, $lockVersion = null)
 * @method LieuTravail|null findOneBy(array $criteria, array $orderBy = null)
 * @method LieuTravail[]    findAll()
 * @method LieuTravail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LieuTravailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, LieuTravail::class);
    }

    // /**
    //  * @return LieuTravail[] Returns an array of LieuTravail objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LieuTravail
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
