<html>
	<head>
		<title>Aula 09 - Curso de PHP</title>
	</head>
	<body>
		<?php
			$nossoArray = array("Database","Campanhas","Fidelidade","Leads","Contact Center");
			$nossoArray[] = "Portal";
			print_r($nossoArray);
			
			unset($nossoArray[5]);
			$nossoArray[3] = "Oportunidades";
			echo "<br/>";
			print_r($nossoArray);
			
			$nossoNovoArray = array("Database" => "Gestão do Banco de Dados", "Campanhas" =>"Acoes de Relacionamento");
			
			echo "<br/>".$nossoNovoArray['Campanhas'];
			
		?>
	</body>
</html>