<?php 

$autoload = spl_autoload_register(function($classe){
    require_once "$classe.class.php";
});