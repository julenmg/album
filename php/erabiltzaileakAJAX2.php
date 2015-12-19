<?php
include "konexioaAJAX.php";
include_once "sesioa.php";
$posta=$_GET['POSTA'];
$erab = "SELECT IZENA,ABIZENAK FROM ERABILTZAILEAK WHERE POSTA=". $posta .";";
$ema = $dblink->query($erab);

$row = $ema->fetch_array(MYSQLI_BOTH);
$mystring = $row['IZENA'] .";" . $row['ABIZENAK'];
echo $mystring;
include "deskonexioa.php";
?>
