<?php

class Cliente {

    var $nome, $email;

    public function setNome($n)
    {
        $this->nome = $n;
    }
    public function getNome()
    {
        return $this->nome; 
    }

    public function setEmail($e)
    {
        $this->email = $e;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function validar($n, $e)
    {
        // $this->nome = $n;   aki estão buscando diretamente..
        // $this->email = $e;

        $this->setNome($n);
        $this->setEmail($e);
    }

    public function exibir()
    {
        echo "Nome: ". $this->getNome()." <br> email: ".$this->getEmail();
        // outra maneira
        // echo "Nome: {$this->getNome()} <br> email: {$this->getEmail()}";
    }

    
}