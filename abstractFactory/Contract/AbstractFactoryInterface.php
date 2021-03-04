<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

interface AbstractFactoryInterface
{
    public function getConnection(): DbConnectionInterface;
    
    public function getRecord(): DbRecordInterface;

    public function getQueryBuilder(): DbQueryBuilderInterface;
}