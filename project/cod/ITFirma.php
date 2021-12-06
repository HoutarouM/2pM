<?php
    class ITFirma
    {
        private $nazwa;
        private $adres;
        private $pracowniki;
        private $produkty;
        private $zadania;

        public function __construct($nazwa, $adres)
        {
            $this->nazwa = $nazwa;
            $this->adres = $adres; 

            $this->pracowniki = [];
            $this->produkty = [];
            $this->czyJestCEO = [];
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
            $pracowniki;
            $produkty;

            for($i = 0; $i < count($this->pracowniki); $i++)
            {
                $pracowniki = $pracowniki.$this->pracowniki[$i]."<br>"; 
            }

            for($i = 0; $i < count($this->produkty); $i++)
            {
                $produkty = $produkty.$this->produkty[$i]."<br>";
            }

            return "IT firma nazwa: $this->nazwa <br>
                adres: $this->adres <br>
                pracownicy: $pracowniki <br>
                podukty: $produkty <br>";
        }

        public function dodajProdukt()
        {

        }

        public function dodajPracownika()
        {

        }

        public function dodajPracownikaDoGrupy()
        {

        }

        public function czyMaLidera()
        {

        }

        public function dodajLidera()
        {

        }
    }    
?>