
<?php 
	
if(isset($_POST['email'])  ){


		$value_txt = $_POST['value_txt'];
		$deal_value = $_POST['deal_value'];
		$dep_eq_label = $_POST['dep_eq_label'];
		$deposit = $_POST['deposit'];
		$totalAmount = $_POST['totalAmount'];
		$loanTerm = $_POST['loanTerm'];
		$rep_int_label = $_POST['rep_int_label'];
		$rep_inter_val = $_POST['rep_inter_val'];
		$paymentMonth = $_POST['paymentMonth'];
		$result_txt = $_POST['result_txt'];
		$result_append = $_POST['result_append'];
		$dollar = $_POST['dollar'];
		
		$email_address = $_POST['email'];
	
		$template_file = "./template.php";
		$email_to = $email_address;
		$subject = "Mortgage Calculator - Results";
		$headers = "MIME-Version: 1.0\r\n";
    	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    	$headers .= "From: Stewart Financial < ciroluizmg@gmail.com >\n";




   

		if (file_exists($template_file)) {
			$email = file_get_contents($template_file);
		}else{
			die('unable to locate template file');
		}



    	$variables = array(
	        "{{value_txt}}" => $value_txt,
	        "{{deal_value}}" => $deal_value,
	        "{{dep_eq_label}}" => $dep_eq_label,
	        "{{deposit}}" => $deposit,
	        "{{totalAmount}}" => $totalAmount,
	        "{{loanTerm}}" => $loanTerm,
	        "{{rep_int_label}}" => $rep_int_label,
	        "{{rep_inter_val}}" => $rep_inter_val,
	        "{{paymentMonth}}" => $paymentMonth,
	        "{{result_txt}}" => $result_txt,
	        "{{result_append}}" => $result_append,
	        "{{dollar}}" => $dollar,
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

	        "{{value_txt}}" => $value_txt,
	        "{{deal_value}}" => $deal_value,
	        "{{dep_eq_label}}" => $dep_eq_label,
	        "{{deposit}}" => $deposit,
	        "{{totalAmount}}" => $totalAmount,
	        "{{loanTerm}}" => $loanTerm,
	        "{{rep_int_label}}" => $rep_int_label,
	        "{{rep_inter_val}}" => $rep_inter_val,
	        "{{paymentMonth}}" => $paymentMonth,
	        "{{result_txt}}" => $result_txt,
	        "{{result_append}}" => $result_append,
	        "{{dollar}}" => $dollar,

	        "{{email}}" => "<p class='useremail'>user's email address: " . $email_address . "</p>"
   		);

   		


    foreach ($variables2 as $key => $value)
        $email2 = str_replace($key, $value, $email2);
    	
		$email_to = 'ciroluizmg@gmail.com';
		$subject = 'New Lead - Mortgage Calculator';



		if (mail($email_to, $subject , $email2 , $headers )) {
			echo "success>>ADMIN";
		}else{
			echo 'not sent to admin';
		}

}

?>




	


		
		