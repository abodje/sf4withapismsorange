<?php

namespace App\Repository;

use App\Entity\SmsApi;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SmsApi|null find($id, $lockMode = null, $lockVersion = null)
 * @method SmsApi|null findOneBy(array $criteria, array $orderBy = null)
 * @method SmsApi[]    findAll()
 * @method SmsApi[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SmsApiRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SmsApi::class);
    }

//    /**
//     * @return SmsApi[] Returns an array of SmsApi objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SmsApi
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
