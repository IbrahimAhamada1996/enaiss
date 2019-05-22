<?php

namespace App\Repository;

use App\Entity\DirecteurHopital;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DirecteurHopital|null find($id, $lockMode = null, $lockVersion = null)
 * @method DirecteurHopital|null findOneBy(array $criteria, array $orderBy = null)
 * @method DirecteurHopital[]    findAll()
 * @method DirecteurHopital[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DirecteurHopitalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DirecteurHopital::class);
    }

    // /**
    //  * @return DirecteurHopital[] Returns an array of DirecteurHopital objects
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
    public function findOneBySomeField($value): ?DirecteurHopital
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
