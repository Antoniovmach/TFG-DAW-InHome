<?php

namespace App\Repository;

use App\Entity\Reserva;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reserva>
 *
 * @method Reserva|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reserva|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reserva[]    findAll()
 * @method Reserva[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReservaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reserva::class);
    }

//    /**
//     * @return Reserva[] Returns an array of Reserva objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reserva
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }


// public function findReservaVivienda(int $viviendaId, \DateTimeImmutable $fechaInicio, \DateTimeImmutable $fechaFin): array
//     {
//         return $this->createQueryBuilder('r')
//             ->join('r.disponibilidadVivienda', 'dv')
//             ->andWhere('dv.vivienda = :viviendaId')
//             ->andWhere('r.fechaReserva BETWEEN :fechaInicio AND :fechaFin')
//             ->setParameter('viviendaId', $viviendaId)
//             ->setParameter('fechaInicio', $fechaInicio)
//             ->setParameter('fechaFin', $fechaFin)
//             ->getQuery()
//             ->getResult();
//     }
}
