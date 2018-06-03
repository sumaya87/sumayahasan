<?php

namespace App\Repository;

use App\Entity\ResumeEducations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeEducations|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeEducations|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeEducations[]    findAll()
 * @method ResumeEducations[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeEducationsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeEducations::class);
    }

//    /**
//     * @return ResumeEducations[] Returns an array of ResumeEducations objects
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
    public function findOneBySomeField($value): ?ResumeEducations
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
