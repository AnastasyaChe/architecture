<?php

declare(strict_types=1);

namespace AbstractFactory\Factory;

use AbstractFactory\Contract\AbstractFactoryInterface;
use AbstractFactory\Contract\DbConnectionInterface;
use AbstractFactory\Contract\DbQueryBuilderInterface;
use AbstractFactory\Contract\DbRecordInterface;
use AbstractFactory\Db\Oracle;


class OracleFactory implements AbstractFactoryInterface
{
   
    private $oracleConnection;

    
    public function __construct(Oracle $oracleConnection)
    {
        $this->oracleConnection = $oracleConnection;
    }

    public function getConnection(): DbConnectionInterface
    {
        return new OracleConnection($this->oracleConnection);
    }

    public function getRecord(): DbRecordInterface
    {
        return new OracleRecord($this->oracleConnection);
        
    }
    public function getQueryBuilder(): DbQueryBuilderInterface
    {
        return new OracleQueryBuilder($this->oracleConnection);
    }
}