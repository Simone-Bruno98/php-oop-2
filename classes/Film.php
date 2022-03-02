<?php 
class Film {
    protected $titolo;
    protected $durata;
    protected $regista;
    protected $trama;
    protected $cast;

    public function __construct($_titolo, $_durata, $_regista, $_trama, $_cast) {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->regista = $_regista;
        $this->trama = $_trama;
        $this->cast = $_cast;
    }

}