<?php
require_once('Operacoes.php');

class Conta implements Operacoes{

    private $titular, $saldo, $msg;

    public function __construct($t){
        $this->setTitular($t);
    }

    /**
     * Get the value of titular
     */ 
    private function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */ 
    private function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of saldo
     */ 
    private function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * Set the value of saldo
     *
     * @return  self
     */ 
    private function setSaldo($saldo)
    {
        $this->saldo = $saldo;

        return $this;
    }

    /**
     * Get the value of msg
     */ 
    private function getMsg()
    {
        return $this->msg;
    }

    /**
     * Set the value of msg
     *
     * @return  self
     */ 
    private function setMsg($msg)
    {
        $this->msg = $msg;

        return $this;
    }

    //metodos da interface

    public function depositar($v)
    {
        $this->setSaldo($this->getSaldo() + $v);
        $this->setMsg("Deposito no valor de $v foi realizado com sucesso! <br>");
    }

    public function sacar($v)
    {
        if($this->getSaldo() >= $v){
            $this->setSaldo($this->getSaldo() - $v);
            $this->setMsg("Saque no valor de $v foi realizado!!<br>");
        }else{
            $this->setMsg("O saque não pode ser realizado. <br> Saldo Insuficiente");
        }

    }

    public function exibir()
    {
        echo "Cliente: ". $this->getTitular()->getNome()."<br>O seu saldo é de R$ ". number_format($this->getSaldo(),2,',','.');
        echo "<br>". $this->getMsg();
    }
}