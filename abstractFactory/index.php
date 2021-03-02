<?php

declare(strict_types=1);

namespace AbstractFactory;


use AbstractFactory\Db\Postgres;
use AbstractFactory\Db\Oracle;
use AbstractFactory\Factory\PostgresFactory;
use AbstractFactory\Factory\OracleFactory;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$postgresFactory = new PostgresFactory(new Postgres());
$serviceWithPostgres = new Service($postgresFactory);
$serviceWithPostgres->addUser();

$oracleFactory = new OracleFactory(new Oracle());
$serviceWithOracle = new Service($oracleFactory);
$serviceWithOracle->addUser();
