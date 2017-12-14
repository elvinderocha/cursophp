<?php
require_once 'SSRSReport.php';
	// vamos receber uma variável via GET e exibir a mesma na tela
	//$texto = $_GET['nome'];
	
define("UID", "Administrator");
define("PASWD", "3ng@g3.@0!5");
define("SERVICE_URL", "http://reports.engbox.com.br/dashboard-ws");



try
{
    $ssrs_report = new SSRSReport(new Credentials(UID, PASWD), SERVICE_URL); 
	$catalogItems = $ssrs_report->ListChildren("/", true);
    $reports = array();
    foreach ($catalogItems as $catalogItem) {
       if ($catalogItem->Type == ItemTypeEnum::$Report) {
           $reports[] = array(
                                "Name" => $catalogItem->Name,
                                "Path" => $catalogItem->Path
                             );
        }    
    }
	print_r($reports[1]);
	//echo "<br/>".$reports[];
}
catch (SSRSReportException $serviceException)
{
    echo $serviceException->GetErrorMessage();
}  

?>
<html>
	<head>
		<title>Aula 03 - Curso de PHP</title>
	</head>
	<body>
		Olá, seja bem vindo!
	</body>
</html>