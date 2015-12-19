<?php

session_start();

function goikoMenua(){
	if(isset($_SESSION['login_email'])){
		echo "<span class='right' ><a href='php/logout.php'>Logout</a></span>";
	}
	else{
		echo "<span class='right'><a href='login'>Login</a></span> | ";
		echo "<span class='right'><a href='signup'>SignUp</a></span>";
	}
}

function mainMenua(){

	echo "<span><a href='./'>Home</a></span> | ";
	echo "<span><a href='credits'>Credits</a></span>";
	if(isset($_SESSION['login_email'])){
		if($_SESSION['login_rol']=="bazkide"){
			echo " | <span><a href='argazkiakikusi'>Argazkiak ikusi</a></span>";
			echo " | <span><a href='argazkiakgehitu'>Argazkiak gehitu</a></span>";
		}else{
			echo " | <span><a href='argazkiakikusi'>Argazkiak ikusi</a></span> | ";
			echo "<span><a href='argazkiakgehitu'>Argazkiak gehitu</a></span> | ";
			echo "<span><a href='bazkideakonartu'>Bazkideak onartu/blokeatu</a></span> | ";
			echo "<span><a href='getUserInform'>Argazkiak ezabatu</a></span> ";
		}	
	}
}

function ekintza($mota,$dblink){
	$data = "";
	$email = "ANONIMOA";
	$id = "";
	if(isset($_SESSION['login_email'])){
		$email = $_SESSION['login_email'];
		$data = $_SESSION['konexio_data'];
		$sql = "SELECT * FROM KONEXIOA WHERE POSTA='{$email}' AND ORDUA='{$data}';";
		$result = $dblink->query($sql);
		if(!$result){
			echo "Errore bat egon da konexioaren id lortzeko";
		}
		$ema = $result->fetch_array(MYSQLI_BOTH);
		$id=  $ema['ID'];	
	}
	
	$ip = get_bezeroaren_ip();
	$ordua = date('Y/m/d G:i:s');
	
	if($mota == ""){
		$mota = "ikusi";
	}

	$ekintza = "INSERT INTO EKINTZA () VALUES('','$id','$email','$mota','$ordua','$ip');";
	$result = $dblink->query($ekintza);
	if(!$result){
		echo "Ekintzarik ez da gehitu";
	}
	
}

function get_bezeroaren_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;

}

function adminlogeatuDa(){
	if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']=="bazkide"){
		header("Location: ../album/"); // Redirecting To Home Page	
	}	
}

function bazkidelogeatuDa(){
	if(!isset($_SESSION['login_email']) || $_SESSION['login_rol']=="administratzaile"){
		header("Location: ../album/"); // Redirecting To Home Page	
	}	
}

function bazedoadminlogeatuDa(){
	if(!isset($_SESSION['login_email'])){
		header("Location: ../album/"); // Redirecting To Home Page	
	}	
}

?>
