<?php
class YandexStrategy implements IPayment
{
    public function payment($number, $totalSum)
    {
        echo 'Оплата по системе Yandex по номеру $number на сумму $totalSum';
    }
}