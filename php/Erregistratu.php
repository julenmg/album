<?php

$dbLink = new mysqli("mysql.hostinger.es","u583754354_root","123456","u583754354_quizz");
//$dbLink = new mysqli("localhost","root","","quiz");
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$uploadOk = 0;
$data = null;
$check = getimagesize($_FILES["irudiaIgo"]["tmp_name"]);
if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";
     $imageFileType = pathinfo($_FILES["irudiaIgo"]["name"]);
	 $uploadOk = 1;

	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
		echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		$uploadOk = 0;
	}else{
		$data = $dbLink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
	}
}
else {
    echo "File is not an image.";
    $uploadOk = 0;
}

$sp = $_POST['ESPEZIALITATEA'];
		
if(strcmp($sp, "B") == 0){
	$sp = $_POST['BTT'];
}

$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,TELEFONOA,ESPEZIALITATEA,IRUDIA)
		VALUES ('$_POST[POSTA]','$_POST[IZENA]','$_POST[ABIZENAK]','$_POST[PASAHITZA]','$_POST[TELEFONOA]','{$sp}','{$data}')";

// SQL exekutatu 
$result = $dbLink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	echo 'Zure fitxategia gehitu da';
	echo "<p><a href='ikuserabiltzaileak.php'> Erregistroak ikusi </a>";
}else{
	echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dbLink->error}</pre>";
}
echo "Erregistro bat gehitu da";

// DB deskonektatzeko
    $dbLink->close();
?>