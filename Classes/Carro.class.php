<?php 

class Carro
{
    private $ligado, $velAtual, $velMax, $msg;

    public function __construct($vm){
        $this->setLigado('Carro desligado');
        $this->setVelAtual(0);
        $this->setVelMax($vm);
        
    }

    public function getLigado()
    {
        $this->ligado;
    }
    public function setLigado($l)
    {
        $this->ligado = $l;
    }
    public function getVelAtual()
    {
        $this->velAtual;
    }
    public function setVelAtual($va)
    {
        $this->velAtual = $va;
    }
    public function getVelMax()
    {
        $this->velMax;
    }
    public function setVelMax($vm)
    {
        $this->velMax = $vm;
    }
    public function getMsg()
    {
        $this->msg;
    }
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }

    public function acelerar($vel)
    {
        if($this->getLigado() =='Carro Ligado'){
            if ($this->getVelAtual() + $vel < $this->getVelMax()){
                $this->setVelAtual($this->getVelAtual() + $vel);
            }else{  
                    $this->setVelAtual($this->getVelMax());
                    $this->setMsg("Velocidade maxima");
            }
        }else{
            $this->setMsg("o carro está desligado!");
        }
        
    }
    public function ligar()
    {
        $this->setLigado('Carro Ligado');
    }
    public function desligar()
    {
        $this->setLigado('Carro desligado');
    }
    

    public function detalhes()
    {
        echo "Status: {$this->getLigado()}<br>";
        echo "Vel. Max: {$this->getVelMax()}<br>";
        echo "Vel. Atual: {$this->getVelAtual()}<br>";
        echo "Msg: {$this->getMsg()}<br>";
    }
}