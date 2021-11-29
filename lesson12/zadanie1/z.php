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
            // zabezpiecztc zeby wpisywali sie odpowiednie dane
            $this->$zmienna = $imie;
        }

        public function __toString()
        {
            return "Object klasy osoba<br>
            Imie: $this->imie,<br>
            Nazwisko: $this->nazwisko<br>";
        }
    }

    class Uczen extends Osoba{
        // kalsa Uczen to klasa potamna
        // klasa Oboba to klasa bazowa
        // klasa Uczen dziedziczy wszystkie metody publiczne i chronieone
        private $nr_Ucznia;

        public function __construct($imie, $nazwisko, $nr)
        {
            parent::__construct($imie, $nazwisko);
            $this->nr_Ucznia = $nr;
        }

        public function __toString()
        {
            return 'imie: '. $this->imie."<br>nazwisko: ". $this->nazwisko. "<br> nr_Ucznia: ". $this->nr_Ucznia. "<br>";
        }
    }

    class Nauczyciel extends Osoba{
        private $przedmiot;

        public function __construct($imie, $nazwisko, $przedmiot)
        {
            parent::__construct($imie, $nazwisko);
            $this->przedmiot = $przedmiot;
        }

        public function __toString()
        {
            return 'imie: '. $this->imie."<br>nazwisko: ". $this->nazwisko. "<br> pzredmiot: ". $this->przedmiot. "<br>";
            // return parent::__toString(). "przedmiot<br>". $this->przedmiot."<br>";
        }
    }

    class ZespolUczniow{
        private $nazwa;
        private $uczniowie = [];
        private $wychowawca;

        public function __construct($nazwa, $wych)
        {
            $this->nazwa = $nazwa;
            $this->wychowawca = $wych;
        }        

        public function dodajUczniaDoKlasy($uczen)
        {
            if(!$this->isInClass($uczen))
            {
                array_push($this->uczniowie, $uczen);
            }            
        }

        public function isInClass($uczen)
        {
            foreach ($this->uczniowie as $ucz) {
                    if($uczen == $ucz)
                    {
                        return true;
                    }
                }
                return false;
        }

        public function __toString()
        {
            $text = "Klasa: ".$this->nazwa;

            foreach ($this->uczniowie as $ucz) {
                $text = $text."<li>".$ucz."</li>";
            }    
            
            $text = $text."Wychowawca: <br>".$this->wychowawca;

            return $text;
        }
    }

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
            $this->wych = $wych;
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

    $nauczyciel1 = new Nauczyciel("Edmund", "Niziurski", "biologia");

    $szkola1 = new Szkola('zs10', 'Chopina Zabrze');

    $szkola1->dodajKlase('1p', $nauczyciel1);
    $szkola1->dodajKlase('2p', $nauczyciel1);
    $szkola1->dodajKlase('3p', $nauczyciel1);

    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");
    $szkola1->dodajUczniaDoSzkoly('Emil', "Nowak");

    // echo $szkola1;

    echo Szkola::$liczba_uczniow;
?>