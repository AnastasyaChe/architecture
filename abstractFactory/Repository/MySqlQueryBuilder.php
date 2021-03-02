<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DbQueryBuilderInterface;

class MySqlQueryBuilder extends BaseMySqlRepository
implements DbQueryBuilderInterface
{
    public function getAll()
    {
        echo 'Выбираем из таблицы БД mysql все данные' . PHP_EOL;
    }

    public function getById(int $id)
    {
        echo 'Выбираем из таблицы БД mysql данные по id' . PHP_EOL;
    }

    public function getByIds(array $ids)
    {
        echo 'Выбираем из таблицы БД mysql данные по ids' . PHP_EOL;
    }
}
