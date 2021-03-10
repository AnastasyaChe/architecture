<?php

class Payment 
{
    private $number;
    private $totalSum;
    public function __construct($number, $totalSum)
    {
      $this->number = $number;
      $this->totalSum = $totalSum;  
    }

    public function payment(IPayment $typeofPayment)
    {
        $typeofPayment->payment($this->number, $this->totalSum);
    }

}