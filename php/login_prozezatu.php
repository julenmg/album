<?php

require 'konexioa.php';

session_start();
$error = '';

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);


$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE POSTA='$email' AND PASAHITZA='$password'" ;
$result = $dblink->query($erabiltzaileak);

	if($result->num_rows == 1){
		$_SESSION['login_email']=$email;
		header("Location: ./layoutBalidatuta.html");
		exit;
	}
	else{
		$error = "Sartutako posta edo pasahitza ez da egokia";
	}

require 'deskonexioa.php';

?>