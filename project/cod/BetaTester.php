<?php
    class BetaTester extends Osoba
    {
        public function __construct($imie, $nazwisko, $adres, $email)
        {
            parent::__construct($imie, $nazwisko, $adres, $email);
        }

        public function __toString()
        {
            return "BetaTester imie: $this->imie <br>
                    nazwisko: $this->nazwisko";
        }

        public function przetestowac()
        {

        }
    }
?>