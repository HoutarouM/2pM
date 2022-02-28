<?php
    class Ksiazka
    {
        private $tytul;
        private $autor;
        private $zajeta;

        public function __construct($tytul, $autor, $zajeta)
        {
            $this->tytul = $tytul;
            $this->autor = $autor;
            $this->zajeta = $zajeta;
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
        return "Tytul: $this->tylul,<br>
                Autor: $this->autor,<br>
                Czy zajeta: $this->zajeta.<br>";
    }
}
?>