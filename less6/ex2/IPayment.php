<?php

interface IPayment
{
    public function payment(string $number, float $totalSum);
}