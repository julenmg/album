<?php
include 'php/config.php';
$dblink = new mysqli(HOST, USER, PASSWORD, DATABASE);

//$dblink = new mysqli("localhost","root","","quiz");
	if(!mysqli_connect_errno()) {
		//echo 'Konektatut da';
	}else{
		die("MySQL connection failed: ". mysqli_connect_error());
	}
?>
