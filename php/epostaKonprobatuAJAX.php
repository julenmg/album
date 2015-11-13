<?php
require_once ('lib/nusoap.php');

$eposta = $_GET['EPOSTA'];

//Web zerbitzariaren URL-a
$wsdl = "http://sw14.hol.es/ServiciosWeb/comprobarmatricula.php?wsdl";
 
//Erabiltzaile objektua sortzen
$client = new nusoap_client($wsdl, 'wsdl');

//Errorern bat egon den
$err = $client->getError();
if ($err) {
	// Display the error
	echo '<h2>Eraikitzerakoan arazoren bat egon da.</h2>' . $err;
        //exit();
}
 
$erantzuna = "<h2 id='epostaerantzuna'style='font-size:1.6em; margin-top:30px;";
$result1=$client->call('comprobar', array('x'=>$eposta ));
if(strcmp($result1,"NO")==0)
	$erantzuna  = $erantzuna  . "color:red;'>GAIZKI!!</h2>";
else
	$erantzuna  =  $erantzuna . "color:green;'>ONDO</h2>";

echo $erantzuna;
?>