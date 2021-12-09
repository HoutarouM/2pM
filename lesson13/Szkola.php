<?php
    class Szkola{
        private $nazwa, $adres;
        private $tablicaKlass;
        private $uczniowie;
        private $nauczyciele;

        private $wych;

        public static $liczba_uczniow = 0;

        public function __construct($nazwa, $adres){
            $this->nazwa = $nazwa;
            $this->adres = $adres;
            $this->tablicaKlass = [];
            $this->uczniowie = [];
            $this->nauczyciele = [];
        }

        public function dodajKlase($nr_klasy, $wych)
        {        
            $klasa = new ZespolUczniow($nr_klasy, $wych);
            array_push($this->tablicaKlass, $klasa);
        }

        public function dodajNauczyciela($imie, $nazwiako, $przedmiot)
        {
            $nauczyciel = new Nauczyciel($imie, $nazwiako, $przedmiot);
            array_push($this->nauczyciele, $nauczyciel);
        }

        public function dodajUczniaDoSzkoly($imie, $nazwisko)
        {
            Szkola::$liczba_uczniow++;

            $uczen = new Uczen($imie, $nazwisko, Szkola::$liczba_uczniow);
            array_push($this->uczniowie, $uczen);

            // $this->dodajUczniaDoKlasy($uczen);
        }

        public function dodajUczniaDoKlasy($klasa, $uczen)
        {
            // sprawdzamy czy uczen jest w jakiejkolwiek klasie  
            foreach($this->tablicaKlass as $kl)
            {
                if($kl->isInClass($uczen))
                {
                    return false;
                }
            }

            $klasa->dodajUczniaDoKlasy($uczen);
        } 

        public function __get($wych)
        {
            return $this->$wych;
        }

        public function __toString()
        {
            $data = '';
            for($i = 0; $i < count($this->uczniowie); $i++)
            {
                $data .= "uczen: ".$this->uczniowie[$i]."<br>";
            }

            return $data;
        }
    } 
?>
