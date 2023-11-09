<?php

use Doctrine\DBAL\Types\Type;
use Psidevs\Helper\EntityManagerCreator;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;

require_once 'vendor/autoload.php';

// Register the UUID type
Type::addType('uuid', Ramsey\Uuid\Doctrine\UuidType::class);

$entityManager = EntityManagerCreator::createEntityManager();

ConsoleRunner::run(
    new SingleManagerProvider($entityManager)
);