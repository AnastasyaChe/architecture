<?php

class SquareAdapterByDiagonal implements AreaInterface
{
    private $area;
    public function __construct(SquareAreaLib $area)
    {
        $this->area = $area;
    }
    public function area(int $parametr) 
    {
      $this->area->getSquareArea($parametr);  
    }
}
