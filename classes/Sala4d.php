<?php 
class Sala4d extends Sala {
    protected $fumo;
    protected $acqua;
    protected $vento;
    protected $caldo;
    protected $vibrazione;

    public function __construct($_id, $_posti, $_fumo, $_acqua, $_vento, $_caldo, $_vibrazione) {
        $this->id = $_id;
        $this->posti = $_posti;
        $this->fumo = $_fumo;
        $this->acqua = $_acqua;
        $this->vento = $_vento;
        $this->caldo = $_caldo;
        $this->vibrazione = $_vibrazione;
    }

}