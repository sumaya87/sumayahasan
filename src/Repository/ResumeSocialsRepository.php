<?php

namespace App\Repository;

use App\Entity\ResumeSocials;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeSocials|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeSocials|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeSocials[]    findAll()
 * @method ResumeSocials[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeSocialsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeSocials::class);
    }

//    /**
//     * @return ResumeSocials[] Returns an array of ResumeSocials objects
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
    public function findOneBySomeField($value): ?ResumeSocials
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
