<?php
require ('lib/nusoap.php');
require_once('lib/class.wsdlcache.php'); 

$pasahitza = $_GET['PASAHITZA'];
$tiketa = $_GET['TIKETA'];


//Web zerbitzariaren URL-a
//$wsdl = "http://wsjulenjon.hol.es/lab1/service/myserver.php";
$wsdl = "http://localhost:80/lab1/service/myserver.php";
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

$result1 = $client->call('konprobatu',array('pasahitza'=>$pasahitza,'tiketa'=>$tiketa));
if(strcmp($result1,"BALIOGABEA")==0){
	$erantzuna  = $erantzuna . "color:red;'>Tiketa BALIOGABEA</h2>";
}
elseif(strcmp($result1,"BALIOZKOA")==0){
	$erantzuna  = $erantzuna . "color:green;'>Dena BALIOZKOA</h2>";
}else{
	$erantzuna  = $erantzuna . "color:red;'>Pasahitz BALIOGABEA</h2>";
}

echo $erantzuna;
?>
