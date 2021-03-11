<?php

class Site implements IObservable

{
    private array $observers;
    private string $vacancy;

    public function setVacancy(string $vacancy) 
    {
        $this->vacancy = $vacancy;
    }
    
    public function addObserver(IObserver $observer)
    {
        $this->observers[] = $observer;
    }
    public function removeObserver(IObserver $observer)
    {
        foreach($this->observers as $obsrv) {
            if($obsrv === $observer){
                unset($obsrv);
            }
        }
    }
    public function notify()
    {
        foreach($this->observers as $observer){
            $observer->getVacancy($this->vacancy);
        }
    }
    

}