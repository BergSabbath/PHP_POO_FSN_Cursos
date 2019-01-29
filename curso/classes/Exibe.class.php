<?php 
class Exibe{

    private $pessoa, $nome;

    public function __construct($nome)
    {
        $this->setPessoa(new Pessoa());
        $this->setNome($nome);
    }

    /**
     * Get the value of pessoa
     */ 
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * Set the value of pessoa
     *
     * @return  self
     */ 
    public function setPessoa($pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get the value of nome
     */ 
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */ 
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    public function exibir()
    {
        echo $this->getPessoa()->configura($this->getNome());
    }
}