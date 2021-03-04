<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

interface DbQueryBuilderInterface
{
    public function getAll();

    public function getById(int $id);

    public function getByIds(array $ids);
}