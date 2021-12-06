<?php
    include 'Osoba.php';

    class LiderGrupy extends Osoba
    {
        private $podporzadkowanePracownicy;

        public function __constructor()
        {
            $this->podzielicMiedzyPracownikow = [];
        }

        public function __get($zmienna)
        {
            return $this->$zmienna;
        }

        public function __set($zmienna, $dane)
        {
            $this->$zmienna = $dane; 
        }

        public function dostacTaski()
        {

        }

        public function podzielicMiedzyPracownikow()
        {

        }

        public function pomucPraktykanta()
        {

        }

        public function zmienicStanWykonaniaZadania()
        {

        }
    }    
?>