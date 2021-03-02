<?php

declare(strict_types=1);

namespace AbstractFactory\Repository;

use AbstractFactory\Contract\DbConnectionInterface;


class OracleConnection extends BaseOracleRepository
implements DbConnectionInterface
{

    public function getConnection()
    {
        return $this->getOracleConnection();
    }
}
