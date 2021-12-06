<?php
    class Zadanie
    {
        private $zangazowaneProgramisci;
        private $procesWykonania;
        private $wymaganaLiczbaProgramistow;

        public function __constructor($zangazowaneProgramisci, $procesWykonania, $wymaganaLiczbaProgramistow)
        {
            $this->zangazowaneProgramisci = $zangazowaneProgramisci;
            $this->procesWykonania = $procesWykonania;
            $this->wymaganaLiczbaProgramistow = $wymaganaLiczbaProgramistow;
        }

        public function __get($zamienna)
        {
            return $this->$zamienna;
        }

        public function __set($zminenna, $dane)
        {
            $this->$zminenna = $dane;
        }

        public function __toString()
        {
            return "Zadanie zaangazowaneprogramisci: $this->zangazowaneProgramisci <br>
                    procesWykonania: $this->procesWykonania <br>
                    wymaganaLiczbaProgramistow: $this->wymaganaLiczbaProgramistow";
        }
    }
?>