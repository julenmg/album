<?php
include_once ("konexioaAJAX.php");
include_once ("sesioa.php");


ekintza("editatu",$dblink);
$id = (int)$_GET['GALDERA_ID'];
$galdera = $_GET['GALDERA'];
$erantzuna = $_GET['ERANTZUNA'];
$zailtasuna = $_GET['ZAILTASUNA'];
$email = $_SESSION['login_email'];

$sql="UPDATE GALDERA SET GALDERA='{$galdera}', ERANTZUNA='{$erantzuna}', ZAILTASUNA={$zailtasuna} WHERE ID={$id} AND POSTA='{$email}'";

$result = $dblink->query($sql);
if($result) {
	echo '<h2>Aukeratutako galdera editatu da</h2>';
}else{
	echo '<h2>Id-a hutsik</h2>';
}
require ("deskonexioa.php");
?>

