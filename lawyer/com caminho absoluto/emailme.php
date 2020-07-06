
<?php 
	
if(isset($_POST['email'])  ){


		$att = $_POST['att'];
		$pieces = $_POST['pieces'];
		//$hours = $_POST['hours'];
		$rate = $_POST['rate'];
		$result = $_POST['result'];
		$email_address = $_POST['email'];
		
	
		$template_file = "./template.php";
		$email_to = $email_address;
		$subject = "Cost Calculator - Results";
		$headers = "MIME-Version: 1.0\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\n";
    	$headers .= "From: Write less bill more < waynepollock@copostrategies.com >\n";




   

		if (file_exists($template_file)) {
			$email = file_get_contents($template_file);
		}else{
			die('unable to locate template file');
		}


		
    	
    	$variables = array(
	        "{{att}}" => $att,
	        "{{pieces}}" => $pieces,
	        "{{rate}}" => $rate,
	        "{{result}}" => $result,
	        "{{email}}" => ""
   		);

   //		


    	foreach ($variables as $key => $value)
        	$email = str_replace($key, $value, $email);
    	




		if (mail($email_to, $subject , $email , $headers )) {
			echo "success>>>USER";
		}else{
			echo 'not sent to user';
        	//echo nl2br("$att \n $pieces \n $hours \n $rate \n $result \n $email_address");
		}

	
		



if (file_exists($template_file)) {
			$email2 = file_get_contents($template_file);
		}else{
			die('unable to locate template file');
		}

    	$variables2 = array(
	        "{{att}}" => $att,
	        "{{pieces}}" => $pieces,
	        "{{rate}}" => $rate,
	        "{{result}}" => $result,
	        "{{email}}" => "<p class='useremail'>user's email address: " . $email_address . "</p>"
   		);

   		


    foreach ($variables2 as $key => $value)
        $email2 = str_replace($key, $value, $email2);
    	



		
		$email_to = 'waynepollock@copostrategies.com';
		$subject = 'new lead - cost calculator';



		if (mail($email_to, $subject , $email2 , $headers )) {
			echo "success>>ADMIN";
		}else{
			echo 'not sent to admin';
		}

}

?>




	


		
		