<html>
	<head>
		<title>Aula 04 - Curso de PHP</title>
	</head>
	<body>
	
		<?php
			// declara��o das vari�veisvariaveis
			$idade = 29; // esta � uma vari�vel do tipo inteira
			$nome  = "Jaison"; // esta � uma vari�vel do tipo string
			$email = "msn@jaison.com.br";
			$habilitado = true; // esta � uma vari�vel do tipo booleana, aceita true ou false
			$valor = 100.00; // esta � uma vari�vel de ponto flutuante
			$calculo = 1+2+3+4+5;
			$resultado = $calculo / 2;
			
			// constantes
			define("IDADE","30");
			define("URL","http://www.devmedia.com.br")
		?>
		
		<p>Ol�, me chamo <?=$nome?>, tenho <?=$idade?> anos.</p>
		
		<p><?=$idade?> + 1 = <?php echo $idade + 1; ?></p>
		
		<p><?php echo $nome."1"; ?></p> = concatena��o
		
		<p>1+2+3+4+5 = <?=$calculo?></p>
		
		<p>Resultado: <?=$resultado?></p>
		
		<p>Minha idade �: <?php echo IDADE; ?></p>
		<p>Minha idade �: <?php echo IDADE; ?></p>
		<p>Minha idade �: <?php echo IDADE; ?></p>
		<p>Minha idade �: <?php echo IDADE; ?></p>
		<p>Minha idade �: <?php echo IDADE; ?></p>
		<p>Minha idade �: <?php echo IDADE; ?></p>
	</body>
</html>