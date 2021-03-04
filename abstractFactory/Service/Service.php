<?php

declare(strict_types=1);

namespace AbstractFactory\Service;

use AbstractFactory\Contract\AbstractFactoryInterface;

use AbstractFactory\Entity\User;


class Service
{
    private $connection;
    private $queryBuilder;
    private $record;


    public function __construct(AbstractFactoryInterface $factory)
    {
        $this->connection = $factory->getConnection();
        $this->queryBuilder = $factory->getQueryBuilder();
        $this->record = $factory->getRecord();
    }

    public function addUser(): void
    {
        $user = new User();
        $this->record->add($user);
    }
}
