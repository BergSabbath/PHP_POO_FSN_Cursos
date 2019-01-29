<title>Curso PHP OO</title>

<?php
    require_once('classes/Aluno.class.php');
    require_once('classes/Escola.class.php');
    require_once('classes/Produtos.class.php');
    require_once('classes/Carrinho.class.php');
    require_once('classes/Pessoa.class.php');
    require_once('classes/Exibe.class.php');
    

    $escola1 = new Escola('FSN Cursos');
    $aluno1 = new Aluno('José dos Santos', $escola1);
    print_r($aluno1);
    
    var_dump($aluno1);
    echo "<hr>";

    $produto1 = new Produtos('Computador');
    $produto2 = new Produtos('Mouse');
    $produto3 = new Produtos('Mesa');
    
    $carrinho = new Carrinho();
    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    $carrinho->adiciona($produto3);
    $carrinho->exibe();


    $exibe = new Exibe('Marcos Paulo');
    $exibe->Exibir();
    
    ?>