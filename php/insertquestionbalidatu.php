<?php
include_once ("konexioa.php");
session_start();
$posta=$_SESSION['login_email'];
$sql="INSERT INTO GALDERA () VALUES('','{$posta}','{$galdera}','{$erantzuna}','{$zailtasuna}')";
$result = $dblink->query($sql);
if($result) {
	echo '<h2>Zure galdera gehitu da</h2>';
}else{
	echo '<h2>Errore bat egon da zure galdera gehitzerakoan</h2>'
               . "<pre>{$dblink->error}</pre>";
}
require ("php/deskonexioa.php");
?>
