<?php

class Cartao{

    private $status, $titular, $saldo, $msg;
    
    public function __construct($t, $s)
    {
        $this->setStatus('Cartão Desativado');
        $this->setTitular($t);
        $this->setSaldo($s);
    }

    //metodos setters
    public function setStatus($st)
    {
        $this->status = $st;
    }
    public function setTitular($t)
    {
        $this->titular = $t;
    }
    public function setSaldo($s)
    {
        $this->saldo = $s;
    }
    public function setMsg($m)
    {
        $this->msg = $m;
    }

    //metodos getters
    public function getStatus()
    {
        return $this->status;
    }
    public function getTitular()
    {
        return $this->titular;
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    public function getMsg()
    {
        return $this->msg;
    }
    //metodos especificos
    public function comprar($c)
    {
        if ($this->getStatus() == 'Cartão Ativado!!')
        {
            if($this->getSaldo() >= $c)
            {
                $this->setSaldo($this->getSaldo() - $c);
                $this->setMsg("Compra no valor de R$ ". number_format($c,2,',','.')."<br> efetuada com sucesso!!");
            }else
            {
                $this->setMsg('Saldo Insuficiente!');
            }
        }else
        {
            $this->setMsg('Cartão Desativado!!');
        }
    }
    public function ativarCartao()
    {
        $this->setStatus('Cartão Ativado!!');
    }
    public function desativarCartao()
    {
        $this->setStatus('Cartão Desativado!!');        
    }
    public function depositar($d)
    {
        $this->setSaldo($this->getSaldo() + $d);
    }
    public function mostrarSaldo()
    {
        echo $this->setMsg("R$ ".number_format($this->saldo,2,',','.'));
    }
}