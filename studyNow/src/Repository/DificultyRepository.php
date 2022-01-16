<?php

namespace App\Repository;

use App\Entity\Dificulty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dificulty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dificulty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dificulty[]    findAll()
 * @method Dificulty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DificultyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dificulty::class);
    }

    // /**
    //  * @return Dificulty[] Returns an array of Dificulty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Dificulty
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
