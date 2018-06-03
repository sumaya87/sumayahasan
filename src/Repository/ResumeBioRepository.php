<?php

namespace App\Repository;

use App\Entity\ResumeBio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeBio|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeBio|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeBio[]    findAll()
 * @method ResumeBio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeBioRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeBio::class);
    }

//    /**
//     * @return ResumeBio[] Returns an array of ResumeBio objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ResumeBio
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
