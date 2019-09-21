<?php

abstract class Pessoa
{
    
    private $nome;
    private $idade;
    private $cpf;
    private $sexo;

    public function Pessoa()
    {
        echo"";
    }

    public function setNome($no)
    {
        $this->nome = $no;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setIdade($ida)
    {
        $this->idade = $ida;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setCPF($cp)
    {
        $this->cpf = $cp;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function setSexo($sex)
    {
        $this->sexo = $sex;
    }

    public function getSexo()
    {
        return $this->sexo;
    }




}

?>