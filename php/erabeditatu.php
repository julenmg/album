<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

$posta=$_GET['POSTA'];
$erabiltzailea = "UPDATE ERABILTZAILEA SET ADMINISTRATZAILE=0 WHERE POSTA='$posta'" ;
$ema = $dblink->query($erabiltzailea);
echo "<h3 style='color:green'>Erabiltzailea onartu da</h3>";

include "deskonexioa.php";
?>
