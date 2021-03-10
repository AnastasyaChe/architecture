<?php
class QiwiStrategy implements IPayment
{
    public function payment($number, $totalSum)
    {
        echo 'Оплата по системе Qiwi по номеру $number на сумму $totalSum';
    }
}