<?php

namespace App\Repository;

use App\Entity\ResumeTestScores;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeTestScores|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeTestScores|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeTestScores[]    findAll()
 * @method ResumeTestScores[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeTestScoresRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeTestScores::class);
    }

//    /**
//     * @return ResumeTestScores[] Returns an array of ResumeTestScores objects
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
    public function findOneBySomeField($value): ?ResumeTestScores
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
