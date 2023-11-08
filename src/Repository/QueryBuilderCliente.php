<?php

namespace Psidevs\Repository;

use Doctrine\ORM\EntityRepository;

class QueryBuilderCliente extends EntityRepository
{
    public function buscarUm()
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c', 'u.nome', 'u.email', 'u.cpf', 'u.telefone', 'u.dataNascimento', 'u.genero', 'u.foto', 'u.tipoUsuario')
            ->leftJoin('c.usuario', 'u')
            ->where('c.id = :id')
            ->setParameter('id', $_SESSION['id_cliente'])
            ->getQuery();
        return $qb->getArrayResult()[0];
    }
}