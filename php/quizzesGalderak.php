<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

ekintza("",$dblink);
$email = $_SESSION['login_email'];
$galdera = "SELECT * FROM GALDERA WHERE POSTA='{$email}'" ;
$ema = $dblink->query($galdera);
//echo "<h2>Galderak ikusi</h2>";
//echo '<table border=1><tr><th> ID </th><th> GALDERA </th><th> ERANTZUNA </th><th> ZAILTASUNA </th></tr>';
$cont= 0;
while( $row = $ema->fetch_array(MYSQLI_BOTH)) {

	
	$cont=$cont+1;
}
$galdera1 = "SELECT * FROM GALDERA" ;
$ema1 = $dblink->query($galdera1);
$cont1= 0;
while( $row1 = $ema1->fetch_array(MYSQLI_BOTH)) {

	
	$cont1=$cont1+1;
}
 
echo $cont."/".$cont1;

include "deskonexioa.php";
?>
