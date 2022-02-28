<?php
    class Czytelnik
    {
        private $imie;
        private $nazwisko;

        private $listaCzytanych;
        private $listaPrzeczytanych;

        public function __construct($imie, $nazwisko)
        {
            $this->tytuimiel = $imie;
            $this->nazwisko = $nazwisko;

            $this->listaCzytanych = [];
            $this->listaPrzeczytanych = [];
        }

        public function __get($zmienna)
        {
            return $this->$zmienna;
        }
    
    public function __set($zmienna, $dane)
    {
        $this->$zmienna = $dane;
    } 

    public function __toString()
    {
        return "Imie: $this->imie,<br>
                Nazwiako: $this->nazwisko,<br>";
    }
    }
?>