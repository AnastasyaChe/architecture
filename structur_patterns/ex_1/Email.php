<?php
// отправка по электронке взято за базовый способ
class Email implements ISending
{
    private $message;
    public function __construct($message)
    {
        $this->message = $message;
    }

    public function send()
    {
        echo "Логика отправки по email сообщения {$this->message}";
    }
}