<?php

namespace App\Repository;

use App\Entity\DirecteurPrefecture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method DirecteurPrefecture|null find($id, $lockMode = null, $lockVersion = null)
 * @method DirecteurPrefecture|null findOneBy(array $criteria, array $orderBy = null)
 * @method DirecteurPrefecture[]    findAll()
 * @method DirecteurPrefecture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DirecteurPrefectureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, DirecteurPrefecture::class);
    }

    // /**
    //  * @return DirecteurPrefecture[] Returns an array of DirecteurPrefecture objects
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
    public function findOneBySomeField($value): ?DirecteurPrefecture
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
