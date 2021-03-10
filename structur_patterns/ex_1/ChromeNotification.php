<?php

class ChromeNotification extends Email implements ISending
{
    public function __construct(
        ISending $objTypeOfSending)
    {
        $this->objTypeOfSending = $objTypeOfSending;
    }

    public function send()
    {
        echo "Логика отправки по CN сообщения {$this->message}";
        $this->objTypeOfSending->send();
    }
}