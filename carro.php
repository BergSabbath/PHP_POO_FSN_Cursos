<?php 

require_once 'html/head.html';
require_once 'html/footer.html';
?>
    <div class="row container">
        <div class="col s12">
        <?php
        require_once 'Classes/Carro.class.php';

        $carro1 = new Carro(230);
        echo "<pre>";
        // $carro1->setLigado(true);
        
        // $carro1->ligar();
        $carro1->acelerar(50);
        $carro1->acelerar(50);
        // $carro1->getVelAtual();
        print_r($carro1);
        echo "<hr>";
        $carro1->detalhes();
        ?>
        </div>
    </div>
