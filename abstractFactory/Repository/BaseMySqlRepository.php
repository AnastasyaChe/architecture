<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Db\MySql;

abstract class BaseMySqlRepository
{
    private $mySqlConnection;

    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    public function getMySqlConnection(): MySql
    {
        return $this->mySqlConnection;
    }
}