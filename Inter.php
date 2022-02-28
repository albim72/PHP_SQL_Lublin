<?php

interface mojProsty {
    public function metoda1();
    public function metoda2();
}

interface mojDrugi {
    public function policzAB($a,$b);
}

class Zastosuj implements mojProsty,mojDrugi{

    public function metoda1()
    {
        echo "pierwsza metoda interfejsu...";
        echo "<br>";
    }

    public function metoda2()
    {
        echo "pierwsza metoda interfejsu...";
        echo "<br>";
    }

    public function policzAB($a, $b)
    {
        echo "wynik: $a+$b-$a*$b";
    }
}
?>
