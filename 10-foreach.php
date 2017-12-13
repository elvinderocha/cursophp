<html>
	<head>
		<title>Aula 10 - Curso de PHP</title>
	</head>
	<body>
		<?php
			$estrutura = array(
			array("Elvin","46","18/10/1978","Cruzeiro"),
			array("Janice","38","","Cruzeiro")
			);
			
			echo "<table border='1'>";
			echo "<tr><td>Nome</td><td>Idade</td><td>Data Nascimento</td><td>Local</td></tr>";
			
			foreach ($estrutura as $val1)
			{
				echo "<tr>";
				foreach ($val1 as $val2)
				{
					echo "<td>".$val2."</td>";
				}
				echo "</tr>";
			}
			echo("</table>");
		?>
	</body>
</html>