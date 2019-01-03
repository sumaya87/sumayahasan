<?php

namespace App\Repository;

use App\Entity\ResumeDownloads;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ResumeDownloads|null find($id, $lockMode = null, $lockVersion = null)
 * @method ResumeDownloads|null findOneBy(array $criteria, array $orderBy = null)
 * @method ResumeDownloads[]    findAll()
 * @method ResumeDownloads[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResumeDownloadsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ResumeDownloads::class);
    }

//    /**
//     * @return ResumeDownloads[] Returns an array of ResumeDownloads objects
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
    public function findOneBySomeField($value): ?ResumeDownloads
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
