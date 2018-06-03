<?php

namespace App\Repository;

use App\Entity\ResumeExperiences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeExperiences|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeExperiences|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeExperiences[]    findAll()
 * @method ResumeExperiences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeExperiencesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeExperiences::class);
    }

//    /**
//     * @return ResumeExperiences[] Returns an array of ResumeExperiences objects
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
    public function findOneBySomeField($value): ?ResumeExperiences
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
