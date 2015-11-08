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

	'<tr><td>'.$row['ID'].'</td> <td>'.$row['GALDERA'].'</td> <td>'.$row['ERANTZUNA'].'</td> <td>'.$row['ZAILTASUNA'].'</td></tr>';
	$cont=$cont+1;
}
$galdera1 = "SELECT * FROM GALDERA" ;
$ema1 = $dblink->query($galdera1);
$cont1= 0;
while( $row1 = $ema1->fetch_array(MYSQLI_BOTH)) {

	'<tr><td>'.$row1['ID'].'</td> <td>'.$row1['GALDERA'].'</td> <td>'.$row1['ERANTZUNA'].'</td> <td>'.$row1['ZAILTASUNA'].'</td></tr>';
	$cont1=$cont1+1;
}

echo "<h2>Nire galderak/Galderak guztira DB:  $cont/$cont1</h2>";
include "deskonexioa.php";
?>
