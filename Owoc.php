<?php

class Owoc {
    public $nazwa;
    public $kolor;

    public function __construct($nazwa,$kolor)
    {
        $this -> nazwa = $nazwa;
        $this -> kolor = $kolor;
    }

    public  function opis(){
        echo "Owoc to: {$this->nazwa}, aa jego kolor to: {$this -> kolor}";
    }
}
class Truskawka extends Owoc{
    public  $waga;
    public function __construct($nazwa, $kolor, $waga)
    {
        parent::__construct($nazwa, $kolor);
        $this -> waga = $waga;
    }

    public function opis(){
        echo "Owoc to: {$this->nazwa}, aa jego kolor to: {$this -> kolor}, 
        średnia waga truskawki wynosi: {$this->waga}";
    }
}

class Banan extends Owoc {

}

$ow = new Owoc("Jabłko","zielony");
$ow->opis();
echo "<br>";

$tr = new Truskawka("Truskawka","czerwony",34);
$tr->opis();
echo "<br>";

$banan = new Banan("Banan","żółty");
$banan->opis();
echo "<br>";


?>
