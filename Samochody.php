<?php

abstract class Auto {
    public $marka;
    public function __construct($marka){
        $this -> marka = $marka;
    }

    public function nieabs(){
        echo "metoda nieabstrakcyjna klasy abstrakcyjnej";
    }

    abstract public function info():string;
}

class Audi extends Auto{

    public function info(): string
    {
       return "wybierz niemiecką markę... $this->marka";
    }
}

class Mercedes extends Auto{

    public function info(): string
    {
        return "wybierz luksusową niemiecką markę... $this->marka";
    }
}

class Volvo extends Auto {

    public function info(): string
    {
        return "wybierz szwedzką jakość... $this->marka";
    }
}

?>
