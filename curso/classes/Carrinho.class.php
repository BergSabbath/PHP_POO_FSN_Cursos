<?php

class Carrinho{

    private $produtos;

    public function adiciona(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach($this->produtos as $produto){
            echo $produto->getNome()."<br>";
        }
    }
}