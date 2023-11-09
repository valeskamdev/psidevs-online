<?php

namespace Psidevs\Helper;

use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

class EntityManagerCreator
{

    /**
     * @throws \Doctrine\ORM\Exception\MissingMappingDriverImplementation
     * @throws \Doctrine\DBAL\Exception
     * @throws \Doctrine\ORM\Exception\ORMException
     */
    public static function createEntityManager(): EntityManager
    {
        $config = ORMSetup::createAttributeMetadataConfiguration(
            paths: [__DIR__ . "/../Entity"],
            isDevMode: true);

        $connection = DriverManager::getConnection([
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'user' => 'root',
            'password' => '',
            'dbname' => 'teste_psidevs_2',
        ], $config);
        return new EntityManager($connection, $config);
    }
}