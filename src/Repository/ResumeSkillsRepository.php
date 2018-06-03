<?php

namespace App\Repository;

use App\Entity\ResumeSkills;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeSkills|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeSkills|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeSkills[]    findAll()
 * @method ResumeSkills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeSkillsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeSkills::class);
    }

//    /**
//     * @return ResumeSkills[] Returns an array of ResumeSkills objects
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
    public function findOneBySomeField($value): ?ResumeSkills
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
