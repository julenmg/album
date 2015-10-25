<?php
include_once ("konexioa.php");
include_once ("sesioa.php");

$email=$_SESSION['login_email'];

ekintza("txertatu",$dblink);

$sql="INSERT INTO GALDERA () VALUES('','{$galdera}','{$erantzuna}','{$zailtasuna}','{$email}')";

$result = $dblink->query($sql);
if($result) {
	echo '<h2>Zure galdera gehitu da</h2>';
}else{
	echo '<h2>Errore bat egon da zure galdera gehitzerakoan</h2>'
               . "<pre>{$dblink->error}</pre>";
}
require ("php/deskonexioa.php");
?>
