<?php

namespace App\Repository;

use App\Entity\TypeOrgane;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TypeOrgane>
 *
 * @method TypeOrgane|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeOrgane|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeOrgane[]    findAll()
 * @method TypeOrgane[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeOrganeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeOrgane::class);
    }

//    /**
//     * @return TypeOrgane[] Returns an array of TypeOrgane objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TypeOrgane
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
