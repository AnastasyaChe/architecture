<?php

spl_autoload_register(function($classname) 
    {require_once($classname . 'php');

});
$message = "Не работаем 8 марта. Дарим девушкам цветы";
//если хотим отправлять сообщение по смс и электронке:
$sending = new Sms(new Email($message));
//если хотим отправлять сообщения по всем трем возможным вариантам
$sending = new ChromeNotification($sending);
