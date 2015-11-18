<?php

require 'konexioa.php';

session_start();

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($dblink,$email);
$password = mysqli_real_escape_string($dblink,$password);
$regex = "/^[a-z]*[0-9]{3}\@irakasle\.ehu(\.es|\.eus)$/";


$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE POSTA='$email' AND PASAHITZA='$password'" ;
$result = $dblink->query($erabiltzaileak);

	if($result->num_rows == 1){
		$data= date('Y/m/d G:i:s');
		$_SESSION['konexio_data']=$data;
		$konexioa="INSERT INTO konexioa (ID,POSTA,ORDUA) VALUES('','{$email}','{$data}')";
		$dblink->query($konexioa);
		
		$_SESSION['login_email']=$email;
		if (!preg_match( $regex, $email ) ){
			$_SESSION['login_rol']="ika";
		}else{
			$_SESSION['login_rol']="ira";
		}
		
		header("Location: ./");
		exit;
	}
	else{
		echo "<h2>Sartutako posta edo pasahitza ez da egokia</h2>";
	}

require 'deskonexioa.php';

?>
