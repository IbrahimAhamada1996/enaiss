<?php

namespace App\Repository;

use App\Entity\AgentPrefecture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgentPrefecture|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgentPrefecture|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgentPrefecture[]    findAll()
 * @method AgentPrefecture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgentPrefectureRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgentPrefecture::class);
    }

    // /**
    //  * @return AgentPrefecture[] Returns an array of AgentPrefecture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgentPrefecture
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
