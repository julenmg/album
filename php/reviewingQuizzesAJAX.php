<?php
include "konexioaAJAX.php";
include_once "sesioa.php";
$id=$_GET['ID'];
$galdera = "SELECT GALDERA,ERANTZUNA,ZAILTASUNA FROM GALDERA WHERE ID=". $id .";";
$ema = $dblink->query($galdera);

$row = $ema->fetch_array(MYSQLI_BOTH);
$mystring = $row['GALDERA'] .";" . $row['ERANTZUNA'] . ";" . $row['ZAILTASUNA'];
echo $mystring;
include "deskonexioa.php";
?>