<?php

namespace App\Repository;

use App\Entity\TypeDeChaine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeDeChaine|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeDeChaine|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeDeChaine[]    findAll()
 * @method TypeDeChaine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeDeChaineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeDeChaine::class);
    }

    // /**
    //  * @return TypeDeChaine[] Returns an array of TypeDeChaine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeDeChaine
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
