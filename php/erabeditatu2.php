<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

$posta=$_GET['POSTA'];
$erabiltzailea = "UPDATE ERABILTZAILEA SET ADMINISTRATZAILE=2 WHERE POSTA='$posta'" ;
$ema = $dblink->query($erabiltzailea);
if(!$ema || $posta=="") {
	echo "<h3 style='color:red'>Erabiltzailea blokeatzerakoan erroreren bat egon da</h3>";
}else{
	echo "<h3 style='color:green'>Erabiltzailea blokeatu da</h3>";
}

include "deskonexioa.php";
?>
