<html>
	<head>
		<title>SSRS - soap metodo</title>
	</head>
	<body>
		<?php
			try
			{
				
				//$options = array(
				//'location'  => 'http://reports.engbox.com.br/dashboard-ws/ReportService2010.asmx?wsdl',
				//'uri'       => 'http://reports.engbox.com.br/dashboard-ws/',
				//'encoding'  => 'ISO-8859-1',
				//'trace'     => 1,
				//'exceptions'=> 0
				//);
				
				//$ws = new SoapClient(NULL, $options);
				
				//var_dump($ws->Auth("Administrator","3ng@g3.@0!5"));
				//$soapclient = new SoapClient('http://reports.engbox.com.br/dashboard-ws/ReportService2010.asmx');	
				$options = array(
    'username' => 'Administrator',
    'password' => '3ng@g3.@0!5'
);


				$client = new SoapClient('http://localhost/ReportServer$SQL2005/ReportService2005.asmx?wsdl', $options);
				
				
				
				

			}
			catch(SoapFault $exception)
			{
				echo $exception->getMessage();
			}
		?>
	</body>
</html>