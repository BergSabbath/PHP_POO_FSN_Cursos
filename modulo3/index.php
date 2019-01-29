<?php
    require_once('classes/Conta.class.php');
    require_once('classes/Cliente.class.php');
    
$cliente = new Cliente('Kim Kaphwan');
$conta = new Conta($cliente);

$depositos = [1200,2000,400,200];
foreach($depositos as $valores){
    $conta->depositar($valores);
}

$saques = [100,300,200,50];
foreach($saques as $valores){
    $conta->sacar($valores);
}
$conta->exibir();
echo "<hr>";
echo "<pre>";
print_r($conta);