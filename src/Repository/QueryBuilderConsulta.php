<?php

namespace Psidevs\Repository;

use Doctrine\ORM\EntityRepository;

class QueryBuilderConsulta extends EntityRepository
{
    public function proximasConsultasCliente()
    {

        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'profissional_usuario.foto as foto', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :status')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('status', 'agendada')
            ->orderBy('consulta.data', 'ASC')
            ->getQuery();
        return $qb->getResult();
    }


    public function proximasTresConsultasCliente()
    {

        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'profissional_usuario.foto as foto', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :status')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('status', 'agendada')
            ->setMaxResults(3)
            ->orderBy('consulta.data', 'ASC')
            ->getQuery();
        return $qb->getResult();
    }
    public function buscaConsultasPassadas()
    {
        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :status')
            ->andWhere('consulta.data < :data')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('status', 'agendada')
            ->setParameter('data', new \DateTime('now'))
            ->getQuery();
        return $qb->getResult();
    }

    public function historicoConsultasCliente()
    {
        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome','profissional_usuario.foto as foto', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :cancelada')
            ->orWhere('consulta.status = :realizada')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('cancelada', 'cancelada')
            ->setParameter('realizada', 'realizada')
            ->getQuery();
        return $qb->getResult();
    }

    public function historicoDuasConsultasCliente()
    {
        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'profissional_usuario.foto as foto', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :cancelada OR consulta.status = :realizada')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('cancelada', 'cancelada')
            ->setParameter('realizada', 'realizada')
            ->setMaxResults(2)
            ->getQuery();
        return $qb->getResult();

    }

    public function  buscaUmaProximaConsulta()
    {
        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :status')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('status', 'agendada')
            ->orderBy('consulta.data', 'ASC')
            ->setMaxResults(1)
            ->getQuery();
        return $qb->getResult();
    }


    // buscar todos os clientes que tem consulta com o profissional
    public function financeiro()
    {
        $qb = $this->createQueryBuilder('profissional')
          ->select('cliente_usuario.nome as nome', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
          ->innerJoin('profissional.consultas', 'consulta')
          ->innerJoin('consulta.cliente', 'cliente')
          ->innerJoin('cliente.usuario', 'cliente_usuario')
          ->where('profissional.id = :profissionalId')
          ->andWhere('consulta.status = :status')
          ->setParameter('profissionalId', $_SESSION['id_profissional'])
          ->setParameter('status', 'realizada')
          ->getQuery();
        return $qb->getResult();
    }


    public function buscaUmaConsultaCliente()
    {
        $qb = $this->createQueryBuilder('cliente')
            ->select('profissional_usuario.nome as nome', 'consulta.id', 'consulta.data', 'consulta.valor', 'consulta.status')
            ->innerJoin('cliente.consultas', 'consulta')
            ->innerJoin('consulta.profissional', 'profissional')
            ->innerJoin('profissional.usuario', 'profissional_usuario')
            ->where('cliente.id = :clienteId')
            ->andWhere('consulta.status = :status')
            ->andWhere('consulta.data >= :data')
            ->andWhere('consulta.data < :dataMaisUmDia')
            ->setParameter('clienteId', $_SESSION['id_cliente'])
            ->setParameter('status', 'agendada')
            ->setParameter('data', new \DateTime('now'))
            ->setParameter('dataMaisUmDia', new \DateTime('now + 1 day'))
            ->orderBy('consulta.data', 'ASC')
            ->getQuery();
        return $qb->getResult();
    }

}