<?php

spl_autoload_register(function($classname) 
    {require_once($classname . 'php');

});

$observer = new UserObserver('Anna', 'bepin@yandex.ru', 3);
$site = new Site();
$site->addObserver($observer);
$observer2 = new UserObserver('Кирилл', 'fail@mail.ru', 10);
$site->addObserver($observer2);
$site->setVacancy('PHP программист');
$site->notify();

$site->removeObserver($observer2);
$site->notify();

