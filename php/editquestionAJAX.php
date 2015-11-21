<?php
include_once ("konexioaAJAX.php");
include_once ("sesioa.php");


ekintza("editatu",$dblink);
$id = (int)$_GET['GALDERA_ID'];
$galdera = $_GET['GALDERA'];
$erantzuna = $_GET['ERANTZUNA'];
$zailtasuna = $_GET['ZAILTASUNA'];

$sql="UPDATE GALDERA SET GALDERA='{$galdera}', ERANTZUNA='{$erantzuna}', ZAILTASUNA={$zailtasuna} WHERE ID={$id} ";

$result = $dblink->query($sql);
if($result) {
	echo "<h3 style='color:green'>Editatua</h3>";
}else{
	echo "<h3 style='color:red'>Id-a ez da zuzena</h3>";
}
require ("deskonexioa.php");
?>

