<?php

require_once 'Pessoa.php';

class Professor extends Pessoa
{
    private $siape;

    public function setSiape($siape)
    {
        $this->siape = $siape;
    }
    
    public function getSiape()
    {
        return $this->siape;
    } 
}

?>