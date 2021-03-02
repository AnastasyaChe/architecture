<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Contract\DbConnectionInterface;
use AbstractFactory\Contract\DbQueryBuilderInterface;
use AbstractFactory\Contract\DbRecordInterface;
use AbstractFactory\Db\Postgres;

class PostgresFactory implements AbstractFactoryInterface
{
    private $postgresConnection;

    public function __construct(Postgres $postgresConnection)
    {
        $this->postgresConnection = $postgresConnection;
    }

    public function getConnection(): DbConnectionInterface
    {
      return new PostgresConnection($this->postgresConnection); 
    }

    
    public function getRecord(): DbRecordInterface
    {
        return new PostgresRecord($this->postgresConnection);
    }
    
    public function getQueryBuilder(): DbQueryBuilderInterface
    {
        return new PostgresQueryBuilder($this->postgresConnection); 
    }
}
