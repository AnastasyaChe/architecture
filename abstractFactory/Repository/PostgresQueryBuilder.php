<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DbQueryBuilderInterface;

class PostgresRecord extends BasePostgresRepository
    implements DbQueryBuilderInterface
{
    public function getAll()
    {
        echo 'Выбираем из таблицы БД postgres все данные' . PHP_EOL;  
    }

    public function getById(int $id)
    {
        echo 'Выбираем из таблицы БД postgres данные по id' . PHP_EOL;  
    }
    
    public function getByIds(array $ids)
    {
        echo 'Выбираем из таблицы БД postgres данные по ids' . PHP_EOL;  
    }
}