<?php

require 'konexioa.php';

session_start();

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($dblink,$email);
$password = mysqli_real_escape_string($dblink,$password);
$regex = "/\w+@(gmail|hotmail|yahoo)\.[A-Za-z]{2,4}/";



	$erabiltzaileak = "SELECT ADMINISTRATZAILE FROM ERABILTZAILEA WHERE POSTA='$email' AND PASAHITZA='$password'";
	$ema = $dblink->query($erabiltzaileak);

		if($ema->num_rows == 1){
			$row = $ema->fetch_array(MYSQLI_BOTH);
			$admin = $row['ADMINISTRATZAILE'];
			
			if ($admin == 1){
				$_SESSION['login_email']=$email;
				$_SESSION['login_rol']="administratzaile";
			}elseif ($admin == 0){
				$_SESSION['login_email']=$email;
				$_SESSION['login_rol']="bazkide";
			}
			
			header("Location: ./");
		}
		
require 'deskonexioa.php';

?>
