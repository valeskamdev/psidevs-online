<?php

namespace Psidevs\Repository;

use Doctrine\ORM\EntityRepository;

class ObjetoRepository extends EntityRepository
{
    public function buscarPorId($objetoId)
    {
        return $this->find($objetoId);
    }

    public function inserir($objeto): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($objeto);
        $entityManager->flush();
    }

    public function atualizar($objeto): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->persist($objeto);
        $entityManager->flush();
    }

    public function excluir($objeto): void
    {
        $entityManager = $this->getEntityManager();
        $entityManager->remove($objeto);
        $entityManager->flush();
    }
}