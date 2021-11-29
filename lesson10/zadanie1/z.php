<?php
    class Osoba{
        private $imie;
        private $nazwisko;

        public function __construct($imie, $nazwiako){
            $this->imie = $imie;
            $this->nazwisko = $nazwiako;
        }

        public function zwroc_imie()
        {
            return $this->imie;
        }

        public function __get($zmienna)
        {
            return $this->$zmienna;
        }

        public function zmien_imie($imie)
        {
            return $this->imie = $imie;
        }

        public function __set($zmienna, $imie)
        {
            $this->$zmienna = $imie;
        }
    };

    $osoba1 = new Osoba("Jas", "Nowak"); // automatycznie jest wywolwana metoda konstruktora

    echo "$osoba1->imie<br>"; // dla zmiennych prywatnych jest wywolywana metoda get

    //$osoba1->zmien_imie("Jan");

    $osoba1->imie = "Jan";
    
    echo "$osoba1->imie ";
    echo "$osoba1->nazwisko<br>"; // dziala tylko dla zmiennych publicznych

    //hermetyzacja klasa ma pole/wlasnoszczi/skladowe ktrych nie mozna modyfikowac poza klasa

    echo $osoba1->zwroc_imie();
?>