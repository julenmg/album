<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

$posta=$_GET['POSTA'];
$erabiltzailea = "UPDATE ERABILTZAILEA SET ADMINISTRATZAILE=0 WHERE POSTA='$posta'" ;
$ema = $dblink->query($erabiltzailea);
if($ema) {
	echo "<h3 style='color:green'>Erabiltzailea onartu da</h3>";
}else{
	echo "<h3 style='color:red'>Erabiltzailea onartzerakoan erroreren bat egon da</h3>";
}


include "deskonexioa.php";
?>
