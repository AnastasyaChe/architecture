<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\OrderRepositoryInterface;
use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Contract\DbConnectionInterface;
use AbstractFactory\Contract\DbQueryBuilderInterface;
use AbstractFactory\Contract\DbRecordInterface;
use AbstractFactory\Contract\UserRepositoryInterface;
use AbstractFactory\Repository\PostgresUserRepository;
use AbstractFactory\Repository\PostgresOrderRepository;
use AbstractFactory\Db\MySql;

class MySqlFactory implements AbstractFactoryInterface
{
    private $mySqlConnection;

    public function __construct(MySql $mySqlConnection)
    {
        $this->mySqlConnection = $mySqlConnection;
    }

    public function getConnection(): DbConnectionInterface
    {
       return new MySqlConnection($this->mySqlConnection);
    }
    

    public function getRecord(): DbRecordInterface
    {
        return new MySqlRecord($this->mySqlConnection);
    }

    public function getQueryBuilder(): DbQueryBuilderInterface
    {
        return new MySqlQueryBuilder($this->mySqlConnection); 
    }
}
