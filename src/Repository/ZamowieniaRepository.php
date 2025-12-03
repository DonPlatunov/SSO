<?php

namespace App\Repository;

use App\Entity\Zamowienia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Zamowienia>
 */
class ZamowieniaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Zamowienia::class);
    }

    //    /**
    //     * @return Zamowienia[] Returns an array of Zamowienia objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('z')
    //            ->andWhere('z.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('z.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Zamowienia
    //    {
    //        return $this->createQueryBuilder('z')
    //            ->andWhere('z.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
