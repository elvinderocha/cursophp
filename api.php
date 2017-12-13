<html>
	<head>
		<title>SSRS - soap metodo</title>
	</head>
	<body>
		<?php
		
			$data = array("subject" => "Hello world", "message" => "Hello world");                                                                    
			$data_string = json_encode($data); 

			echo $data_string;		
																																 
			$ch = curl_init('http://api.emailspamtest.com/checkspamemail');                                                                      
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
			curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
				'Content-Type: application/json',                                                                                
				'Content-Length: ' . strlen($data_string))                                                                       
			);                                                                                                                   
																																 
			$result = curl_exec($ch);
			
			echo $result

		?>
	</body>
</html>