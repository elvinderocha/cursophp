<html>
	<head>
		<title>Aula 07 - Curso de PHP</title>
	</head>
	<body>
		
		<p>Criar um c�digo que liste os 100 primeiros n�meros</p>
		
		<?php
			
			// inicializa��o; condi��o; incremento
			
			/*
			for($x=1; $x <= 100; $x++){
				echo $x." ";
			}
			*/
			
		?>
		
		
		<table width="100%" border="1">
			<tr>
				<td><h3>C�digo</h3></td>
				<td><h3>Nome</h3></td>
				<td><h3>Endere�o</h3></td>
			</tr>
			
			<?php
				for($x=1; $x <= 50; $x++){
			?>
			<tr>
				<td><?=$x?></td>
				<td>Jaison Schmidt</td>
				<td>Rua Tonelero</td>
			</tr>
			<?php } ?>
		</table>	
			
		</body>
		
	</body>
</html>