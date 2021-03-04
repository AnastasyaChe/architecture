<?php

declare(strict_types=1);

namespace AbstractFactory\Contract;

interface DbConnectionInterface
{
    public function getConnection();
    
}