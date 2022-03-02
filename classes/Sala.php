<?php 
class Sala {
    protected $id;
    protected $posti;

    public function __construct($_id, $_posti) {
        $this->id = $_id;
        $this->posti = $_posti;
    }

    public function getDetails(){
        return "{$this->id} {$this->posti}";
    }

    public function getPosti(){
        return $this->posti;
    }

}