<?php

require_once ('classes/autoload.php');

$func1 = new Funcionario();
$client1 = new Cliente();
$forn1 = new Fornecedor();

echo "<pre>";
echo print_r($func1);

echo "<hr>";
echo print_r($client1);
echo "<hr>";
echo print_r($forn1);
echo "<hr>";
$nome = 'kim kaphwan';
$tel = '(11) 3333-4444';
$email = 'kim@teste.com';
$cargo = 'Lutador';
$sal = 4000;

$func1->validar($nome, $tel, $email, $cargo, $sal);
$func1->exibir();
$func1->enviarEmail();