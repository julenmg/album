<?php
	// define variables and set to empty values
	$email = $password = "";
	$emailEgokia=false;
	
		$email = $_POST['POSTA'];
		$password = $_POST['PASAHITZA'];
		$emailEgokia = filter_var($email, FILTER_VALIDATE_REGEXP,array("options"=>array("regexp"=>"^[a-z]*[0-9]{3}\@ikasle\.ehu(\.es|\.eus)$"))); 
		$errore = "errorea egon da."
		
		if(!$emailEgokia){
			header('Location: login.php?id=$errore');
			
		}else{
			$dbLink = new mysqli("mysql.hostinger.es","u583754354_root","123456","u583754354_quizz");
			$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE EMAIL=$email" ;
			$result = $dbLink->query($erabiltzaileak);

			if($resul->num_rows == 1)
				header('Location: layoutLogIn.html');
			else
				echo "<h2> Emaila ez da datu basean existitzen</h2>";
		}
		echo "</section>";
		
?>