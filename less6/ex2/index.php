<?php

spl_autoload_register(function($classname) 
    {require_once($classname . 'php');

});

function pay($number, $totalSum) 
{
    $payment = new Payment($number, $totalSum);
    $payment->payment(new QiwiStrategy());
    $payment->payment(new YandexStrategy());
    $payment->payment(new WebMoneyStrategy());

}

pay('89456784321', 600.00);
pay('76543273458', 700.00);

