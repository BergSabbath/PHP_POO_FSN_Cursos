<?php
	require_once 'classes/Cartao.class.php';
	$cliente1 = new Cartao('Maria Julia', 2000);

	$cliente1->ativarCartao();
	$cliente1->comprar(250);
	$cliente1->comprar(250.56);
	
	$cliente1->desativarCartao();
	$cliente1->comprar(300);
	
	$cliente1->ativarCartao();
	$cliente1->comprar(1000);
	$cliente1->comprar(499.44);
	$cliente1->comprar(0.44);
	$cliente1->depositar(350.50);
	$cliente1->depositar(350.50);
	$cliente1->mostrarSaldo();
?>

<?php require_once 'html/head.html' ?>
<div class="row container">
	<div class="col s12">
		<p>&nbsp;</p>

		<!-- mensagens -->
		<?php  echo $cliente1->getMsg(); ?>

	</div>
</div>
<?php require_once 'html/footer.html' ?>