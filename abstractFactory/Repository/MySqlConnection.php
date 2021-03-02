<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DbConnectionInterface;


class PostgresConnection extends BaseMySqlRepository
implements DbConnectionInterface
{

    public function getConnection()
    {
        return $this->getMySqlConnection();
    }
}
