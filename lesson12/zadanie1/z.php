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
        private $nr_Klasy;

        // public function __construct($imie, $nazwiako, $klasa)
        // {
        //     $this->imie = $imie;
        //     $this->nazwisko = $nazwiako;
        //     $this->nr_Klasy = $klasa;
        // }

    }

    class Nauczyciel extends Osoba{
        private $przedmiot;

        public function __construct($imie, $nazwiako, $przedmiot)
        {
            $this->imie = $imie;
            $this->nazwisko = $nazwiako;
            $this->przedmiot = $przedmiot;
        }

        public function __toString()
        {
            return "Object klasy osoba<br>
            Imie: $this->imie,<br>
            Nazwisko: $this->nazwisko<br>
            Przedmiot: $this->przedmiot<br>";
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
            $this->ucuczniowie = [];
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

        public function dodajUczniaDoSzkoly($imie, $nazwisko, $nr_klasy)
        {
            $uczen = new Uczen($imie, $nazwiako, $nr_klasy);
            array_push($this->uczniowie, $uczen);
            Szkola::$liczba_uczniow++;
        }

        public function __get($wych)
        {
            $this->wych = $wych;
        }
    }

    // $osoba1 = new Osoba("Jas", "Nowak"); // automatycznie jest wywolwana metoda konstruktora

    // echo "$osoba1->imie<br>"; // dla zmiennych prywatnych jest wywolywana metoda get

    // //$osoba1->zmien_imie("Jan");

    // $osoba1->imie = "Jan";
    
    // echo "$osoba1->imie ";
    // echo "$osoba1->nazwisko<br>"; // dziala tylko dla zmiennych publicznych

    // // hermetyzacja klasa ma pole/wlasnoszczi/skladowe ktrych nie mozna modyfikowac poza klasa

    // echo $osoba1->zwroc_imie();

    // echo "<br>";

    // $uczen1 = new Uczen("Emil", "Pistacjusz");

    // echo "$uczen1->imie<br>";

    // echo $uczen1;

    // echo "<br>";

    // $uczen2 = new Uczen("Adrian", "Adrenski");

    $nauczyciel1 = new Nauczyciel("Edmund", "Niziurski", "biologia");

    // $klasa2p = new ZespolUczniow("2p", $nauczyciel1);

    // $klasa2p->dodajUczniaDoKlasy($uczen1);
    // $klasa2p->dodajUczniaDoKlasy($uczen2);
    // $klasa2p->dodajUczniaDoKlasy($uczen2);

    // echo $klasa2p;

    $szkola1 = new Szkola('zs10', 'Chopina Zabrze');

    $szkola1->dodajKlase('2p', $nauczyciel1);

    echo Szkola::$liczba_uczniow;
?>