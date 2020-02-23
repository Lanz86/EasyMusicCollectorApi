<?php

namespace App\Repository;

use App\Entity\Genere;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\EntityManagerInterface;

/**
 * @method Genere|null find($id, $lockMode = null, $lockVersion = null)
 * @method Genere|null findOneBy(array $criteria, array $orderBy = null)
 * @method Genere[]    findAll()
 * @method Genere[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GenereRepository extends ServiceEntityRepository
{
    private $_manager;
    public function __construct(ManagerRegistry $registry, EntityManagerInterface $manager)
    {
        parent::__construct($registry, Genere::class);
        $this->_manager = $manager;
    }

    public function getByIds($ids) {
        return $this->_manager->createQuery('SELECT g FROM App\Entity\Genere WHERE g.id IN (:ids)')
            ->setParameter('ids', $ids)->execute();
    }

    public function deleteGenre($genre) {
        $this->_manager->remove($genre);
        $this->_manager->flush();
    }

    public function save($manager) {
        $this->_manager->persist($manager);
        $this->_manager->flush();
    }

    // /**
    //  * @return Genere[] Returns an array of Genere objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Genere
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
