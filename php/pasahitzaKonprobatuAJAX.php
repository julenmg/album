<?php
require ('lib/nusoap.php');

$pasahitza = $_GET['PASAHITZA'];

//Web zerbitzariaren URL-a
$wsdl = "http://wsjulenjon.hol.es/lab1/service/myserver.php";
//$wsdl = "http://localhost:80/lab1/service/myserver.php";
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, false);

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
        //exit();
}

$erantzuna = "<h2 id='passerantzuna'  style='font-size:1.6em; margin-top:30px;";

$result1 = $client->call('konprobatu',array('pasahitza'=>$pasahitza));

if(strcmp($result1,"BALIOGABEA")==0 || strcmp($pasahitza,"")==0){
	$erantzuna  = $erantzuna . "color:red;'>BALIOGABEA</h2>";
}
else{
	$erantzuna  = $erantzuna . "color:green;'>BALIOZKOA</h2>";
}

echo $erantzuna;
?>
