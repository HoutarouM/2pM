<?php
    include 'Osoba.php';

    class Programist extends Osoba
    {
        private $oddzial;
        private $grupa;
        private $posada;
        private $czyZajety;
        
        public function __construct($imie, $nazwisko, $adres, $email, $oddzial, $grupa, $posada)
        {
            parent::__construct($imie, $nazwisko, $adres, $email);

            $this->oddzial = $oddzial;
            $this->grupa = $grupa;
            $this->posada = $posada;

            $this->czczyZajety = false;
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
            return "Programist imie: $this->imie <br>
                    nazwisko: $this->nazwisko <br>
                    oddzial: $this->oddzial <br>
                    grupa: $this->grupa <br>
                    posada: $this->posada";
        }

        public function dostacTask()
        {

        }

        public function podjacPraceNadZadaniem()
        {

        }
    }
?>
