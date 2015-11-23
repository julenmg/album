<?php
include_once ("konexioaAJAX.php");
include_once ("sesioa.php");

$email = $_SESSION['login_email'];

//$eposta = $_GET['EPOSTA']
$pasahitza = $_GET['PASAHITZA'];

ekintza("pasahitza aldatu",$dblink);


$sql="UPDATE ERABILTZAILEA SET PASAHITZA='{$pasahitza}' WHERE POSTA='{$email}' ";

$result = $dblink->query($sql);
if($result) {
	echo "<h3 style='color:green'>Pasahitza aldatu da!</h3>";
}else{
	echo "<h3 style='color:red'>Erroreren bat egon da.</h3>";
}
require ("deskonexioa.php");
?>

