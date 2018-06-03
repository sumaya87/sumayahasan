<?php

namespace App\Repository;

use App\Entity\ResumeSkillTypes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeSkillTypes|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeSkillTypes|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeSkillTypes[]    findAll()
 * @method ResumeSkillTypes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeSkillTypesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeSkillTypes::class);
    }

//    /**
//     * @return ResumeSkillTypes[] Returns an array of ResumeSkillTypes objects
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
    public function findOneBySomeField($value): ?ResumeSkillTypes
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
