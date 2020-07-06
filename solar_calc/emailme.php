
<?php 
	
if(isset($_POST['email'])  ){

		$nvepay = $_POST['nvepay'];
		$bill10 = $_POST['bill10'];

		$bill20 = $_POST['bill20'];
		$wipout = $_POST['wipout'];

		$VNOFPANELS = $_POST['VNOFPANELS'];
		$VSYSSIZE = $_POST['VSYSSIZE'];

		$VTAXCREDIT = $_POST['VTAXCREDIT'];
		$VPMTWITHITC = $_POST['VPMTWITHITC'];


		$avgbillmonth = $_POST['avgbillmonth'];
		$totalavg = $_POST['totalavg'];

		$Vtensav = $_POST['Vtensav'];
		$Vtwentysav = $_POST['Vtwentysav'];


		$name = $_POST['name'];
		$email = $_POST['email'];
		$adress = $_POST['adress'];
		$phone = $_POST['phone'];
		


		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  echo $response;
		}

}

?>