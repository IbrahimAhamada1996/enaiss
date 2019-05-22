<?php

namespace App\Repository;

use App\Entity\AgentEconomie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgentEconomie|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgentEconomie|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgentEconomie[]    findAll()
 * @method AgentEconomie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgentEconomieRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgentEconomie::class);
    }

    // /**
    //  * @return AgentEconomie[] Returns an array of AgentEconomie objects
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
    public function findOneBySomeField($value): ?AgentEconomie
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
