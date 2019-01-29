<?php require_once 'html/head.html' ?>

<div class="row container">
	<div class="col s12">
		
		<?php

			require_once 'classes/Aluno.class.php';

			$aluno1 = new Aluno();
			$aluno2 = new Aluno();

			$aluno1->nome = "Ludenberg";
			$aluno1->email = "bergyagami@gmail.com";
			$aluno2->nome = "julianne";
			$aluno2->email = "julianne@gmail.com";


			echo "<pre>";
			var_dump($aluno1);
			echo "<br>";
			var_dump($aluno2);

		?>


	</div>
</div>

<?php require_once 'html/footer.html' ?>;