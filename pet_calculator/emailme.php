
<?php 
	
if(isset($_POST['email'])  ){

		$email = $_POST['email'];

		$cdbmg = $_POST['Amount-of-CBD-in-1-ML'];
		echo $cdbmg;
		$cdbdrop = $_POST['Amount-of-CBD-in-1-Drop'];
		$low = $_POST['Low-Dosage-of-CBD'];
		$lowNdrop = $_POST['#-of-Drops-for-Low-Dosage'];
		$med = $_POST['Medium-Dosage-of-CBD'];
		$medNdrop = $_POST['#-of-Drops-for-Medium-Dosage'];
		$high = $_POST['High-Dosage-of-CBD'];
		$highNdrop = $_POST['#-of-Drops-for-High-Dosage'];
		echo $highNdrop;



	



	$curl = curl_init();

	  curl_setopt_array($curl, array(
  	  CURLOPT_URL => "https://api.mailerlite.com/api/v2/groups/101210714/subscribers",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{\"email\": \"$email\", 
	  \"fields\": 
	  	{
	  		\"amount_of_cbd_in_1_ml\": \"$cdbmg\",
	  		\"amount_of_cbd_in_1_drop\": \"$cdbdrop\",
	  		\"low_dosage_of_cbd\": \"$low\",
	  		\"of_drops_for_low_dosage\": \"$lowNdrop\",
	  		\"medium_dosage_of_cbd\": \"$med\",
	  		\"of_drops_for_medium_dosage\": \"$medNdrop\",
	  		\"high_dosage_of_cbd\": \"$high\",
	  		\"of_drops_for_high_dosage\": \"$highNdrop\"
	  	} 
	  }",
	  CURLOPT_HTTPHEADER => array(
	    "content-type: application/json",
	    "x-mailerlite-apikey: f6d9a708c72795df73c5115a6c23e17d"
	  ),
	));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}





}

