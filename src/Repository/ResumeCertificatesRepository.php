<?php

namespace App\Repository;

use App\Entity\ResumeCertificates;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeCertificates|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeCertificates|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeCertificates[]    findAll()
 * @method ResumeCertificates[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeCertificatesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeCertificates::class);
    }

//    /**
//     * @return ResumeCertificates[] Returns an array of ResumeCertificates objects
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
    public function findOneBySomeField($value): ?ResumeCertificates
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
