<?php
    class AnalitykMarketingu extends Osoba
    {
        public function __construct($imie, $nazwisko, $adres, $email)
        {
            parent::__construct($imie, $nazwisko, $adres, $email);
        }

        public function __toString()
        {
            return "Analityk Marketingu imie: $this->imie <br>
                    nazwisko: $this->nazwisko <br>";
        }

        public function stworzycReklam()
        {

        }
    }
?>