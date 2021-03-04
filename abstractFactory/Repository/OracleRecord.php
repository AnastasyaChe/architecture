<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DbRecordInterface;
use AbstractFactory\Entity\User;

class OracleRecord extends BaseOracleRepository
implements DbRecordInterface
{
    public function add(User $user)
    {

        echo 'Добавляем в oracle пользователя $user.' . PHP_EOL;
    }


    public function delete(User $user)
    {
        echo 'Удаляем в oracle пользователя $user.' . PHP_EOL;
    }

    public function update(User $user)
    {
        echo 'Обновляем в oracle пользователя $user.' . PHP_EOL;
    }
}
