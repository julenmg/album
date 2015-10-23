<?php
include_once 'config.php';
$dblink = new mysqli(HOST, USER, PASSWORD, DATABASE);
	if(!mysqli_connect_errno()) {
		//echo 'Konektatut da';
	}else{
		die("MySQL connection failed: ". mysqli_connect_error());
	}
?>
