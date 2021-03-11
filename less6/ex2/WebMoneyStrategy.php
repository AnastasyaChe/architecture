<?php
class WebMoneyStrategy implements IPayment
{
    public function payment($number, $totalSum)
    {
        echo 'Оплата по системе WebMoney по номеру $number на сумму $totalSum';
    }
}