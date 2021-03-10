<?php

class UserObserver implements IObserver
{
    private $name;
    private $email;
    private $stage;

    public function __construct(string $name, string $email, int $stage)
    {
        $this->name = $name;
        $this->email = $email;
        $this->stage = $stage;
        
    }

    public function getVacancy(string $vacancy)
    {
        echo "Реализуем логику отправки пользователю '{$this->name}' вакансии $vacancy";
    }
}
