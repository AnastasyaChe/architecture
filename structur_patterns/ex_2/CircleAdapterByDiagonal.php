<?php

class CircleAdapterByDiagonal implements AreaInterface
{
    private $area;
    public function __construct(CircleAreaLib $area)
    {
        $this->area = $area;
    }
    public function area(int $parametr) 
    {
      $this->area->getCircleArea($parametr);  
    }
}