<?php

require 'konexioa.php';
$_SESSION['login_count']=0;
session_start();

// To protect MySQL injection for Security purpose
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($dblink,$email);
$password = mysqli_real_escape_string($dblink,$password);
$regex = "/^[a-z]*[0-9]{3}\@irakasle\.ehu(\.es|\.eus)$/";

//$baimena = "SELECT BLOKEATUTA FROM ERABILTZAILEA WHERE POSTA='$email'" ;
//$result1 = $dblink->query($baimena);
//if($result1->num_rows == TRUE){
	$erabiltzaileak = "SELECT * FROM ERABILTZAILEA WHERE POSTA='$email' AND PASAHITZA='$password'" ;
	$result = $dblink->query($erabiltzaileak);
	
		if($result->num_rows == 1 && $_SESSION['login_count']<4){
			$_SESSION['login_count']=0;
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
			$_SESSION['login_count']=$_SESSION['login_count']+1;
//			echo $_SESSION['login_count'];
			if($_SESSION['login_count']<3){
				$auk=3-$_SESSION['login_count'];
				echo "<h2>Sartutako posta edo pasahitza ez da egokia $auk aukera geratzen zaizkizu.</h2>";
			}else{
				//$blokeatu="UPDATE ERABILTZAILEA SET BLOKEATUTA=1 WHERE POSTA='$email'";
				//$dblink->query($blokeatu);
				echo "<h2>Hiru saiakeratan huts egin duzu erabiltzailea blokeatu da.</h2>";
			}
		}
/*}else{
	echo "<h2>Erabiltzailea blokeatuta dago.</h2>";
}*/
require 'deskonexioa.php';

?>
