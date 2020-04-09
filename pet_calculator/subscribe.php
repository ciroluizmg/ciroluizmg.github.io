
<?php 
	
if(isset($_POST['species'])  ){

	if ($_POST['species'] == 'cat' ) {
		$species = '54377488';
	}else{
		$species = '54377436';
	}

	if (isset($_POST['email']) ) {
		$email = $_POST['email'];
	}



	$curl = curl_init();

	  curl_setopt_array($curl, array(
  	  CURLOPT_URL => "https://api.mailerlite.com/api/v2/groups/$species/subscribers",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => "{\"email\": \"$email\" }",
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

