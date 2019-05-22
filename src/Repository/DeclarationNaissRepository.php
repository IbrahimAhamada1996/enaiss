<?php

namespace App\Repository;

use App\Entity\DeclarationNaiss;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DeclarationNaiss|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeclarationNaiss|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeclarationNaiss[]    findAll()
 * @method DeclarationNaiss[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeclarationNaissRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DeclarationNaiss::class);
    }

    // /**
    //  * @return DeclarationNaiss[] Returns an array of DeclarationNaiss objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeclarationNaiss
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
