<?php require_once 'html/head.html' ?>

<div class="row container">
	<div class="col s12">
		
		<?php

			require_once 'classes/cliente.class.php';

            $cliente1 = new Cliente();
            $cliente2 = new Cliente();

            $cliente1->setNome("Julianne");
            $cliente1->setEMail("Julianne@gmail.com");
            echo $cliente1->getNome();
            echo "<br>";
            echo $cliente1->getEmail();

            echo "<br>";
            $cliente2->validar("Ludenberg", "bergyagami@gmail.com");
            $cliente2->exibir();


            ?>


	</div>
</div>

<?php require_once 'html/footer.html' ?>;