<?php

session_start();

function goikoMenua(){
	if(isset($_SESSION['login_email'])){
		echo "<span class='right' style='display:block;'><a href='php/logout.php'>Logout</a></span>";
	}
	else{
		echo "<span class='right'><a href='login.php'>Login</a></span> | ";
		echo "<span class='right'><a href='signup.php'>SignUp</a></span>";
	}
}

function mainMenua(){

	if(isset($_SESSION['login_email'])){
		echo "<span><a href='./layout.php'>Home</a></span> | ";
		echo "<span><a href='./insertquestion.php'>Insert Question</a></span> | ";
		echo "<span><a href='./credits.php'>Credits</a></span> | ";
		echo "<span><a href='./quiz.php'>Quiz</a></span>";
	
	}
	else{
		echo "<span><a href='./layout.php'>Home</a></span> | ";
		echo "<span><a href='./credits.php'>Credits</a></span> | ";
		echo "<span><a href='./quiz.php'>Quiz</a></span>";

	}
}

function ekintza($mota,$dblink){
	$data = "";
	$email = "";
	$id = "";
	if(isset($_SESSION['login_email'])){
		$email = $_SESSION['login_email'];
		$data = $_SESSION['konexio_data'];
		$sql = "SELECT * FROM KONEXIOA WHERE ORDUA='{$data}';";
		if($dblink->query($sql)) {
		echo 'Errore bat konexioaren id lortu nahi denean';
		}else{
			$row = $result->fetch_array(MYSQLI_BOTH);
			$id=  $row['ID'];
		}
	}
	
	$ip = get_bezeroaren_ip();
	$ordua = date('Y/m/d G:i:s');
	
	if($mota == ""){
		$mota = "ikusi";
	}

	$ekintza = "INSERT INTO EKINTZA () VALUES('','$id','$email','$mota','$ordua','$ip');";
	
	if($dblink->query($ekintza)) {
		echo 'Errore bat egon da ekintza gehitzerakoan'
               . $dblink->error;
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

?>