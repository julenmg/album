<?php

$dbLink = new mysqli("mysql.hostinger.es","u583754354_root","123456","u583754354_quizz");
//$dbLink = new mysqli("localhost","root","","quiz");
if(mysqli_connect_errno()) {
    die("MySQL connection failed: ". mysqli_connect_error());
}

$data = null;
$check = getimagesize($_FILES["irudiaIgo"]["tmp_name"]);
if($check !== false) {
     echo "File is an image - " . $check["mime"] . ".";

	$data = $dbLink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
}
else {
    echo "File is not an image.";
 
}


$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,TELEFONOA,ESPEZIALITATEA,IRUDIA)
		VALUES ('{$posta}','{$izena}','{$abizenak}','{$pasahitza}','{$telefonoa}','{$espezialitatea}','{$data}')";

// SQL exekutatu 
$result = $dbLink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	echo 'Zure fitxategia gehitu da';
	echo "<p><a href='php/ikuserabiltzaileak.php'> Erregistroak ikusi </a>";
}else{
	echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dbLink->error}</pre>";
}
echo "Erregistro bat gehitu da";

// DB deskonektatzeko
    $dbLink->close();
?>