<?php

namespace Psidevs\Repository;

use Doctrine\ORM\EntityRepository;

class QueryBuilderProfissinal extends EntityRepository
{
    public function buscarTodos()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('u.nome', 'u.foto', 'p.id', 'p.registroCRP', 'p.valorConsulta', 'p.especialidade', 'p.descricao', 'p.regiao')
            ->leftJoin('p.usuario', 'u')
            ->getQuery();
        return $qb->getResult();
    }

    public function buscarUm()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p', 'u')
            ->leftJoin('p.usuario', 'u')
            ->where('p.id = :id')
            ->setParameter('id', $_SESSION['id_profissional'])
            ->getQuery();
        return $qb->getArrayResult()[0];
    }

    public function buscaFormacoes()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p', 'f')
            ->leftJoin('p.formacoes', 'f')
            ->where('p.id = :id')
            ->setParameter('id', $_SESSION['id_profissional'])
            ->getQuery();
        return $qb->getArrayResult()[0]['formacoes'];
    }

    public function buscaDisponibilidades()
    {
        $qb = $this->createQueryBuilder('d')
            ->select('d.diaSemana', 'd.horaInicio', 'd.horaTermino')
            ->where('d.profissional = :id')
          ->setParameter('id', $_SESSION['id_profissional'])
            ->getQuery();
        return $qb->getResult();
    }

    public function buscaDisponibilidadesAgendamento(string $id)
    {
        $qb = $this->createQueryBuilder('d')
          ->select('d.diaSemana', 'd.horaInicio', 'd.horaTermino')
          ->where('d.profissional = :id')
          ->setParameter('id', $id)
          ->getQuery();
        return $qb->getResult();
    }

    public function buscaConsultas()
    {
        $qb = $this->createQueryBuilder('p')
            ->select('p', 'c')
            ->leftJoin('p.consultas', 'c')
            ->where('p.id = :id')
            ->setParameter('id', $_SESSION['id_profissional'])
            ->getQuery();
        return $qb->getArrayResult()[0]['consultas'];
    }

    public function buscarPorEspecialidade($especialidade)
    {
        $qb = $this->createQueryBuilder('p')
            ->select('u.nome', 'u.foto', 'p.id', 'p.registroCRP', 'p.valorConsulta', 'p.especialidade', 'p.descricao', 'p.regiao')
            ->leftJoin('p.usuario', 'u')
            ->where('p.especialidade = :especialidade')
            ->setParameter('especialidade', $especialidade)
            ->getQuery();
        return $qb->getResult();
    }
}