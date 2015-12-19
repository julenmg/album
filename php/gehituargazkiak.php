<?php

include_once "konexioa.php";

session_start();

$data = null;
if(!empty(getimagesize($_FILES["irudiaIgo"]["tmp_name"]))) {
     //echo "File is an image - " . $check["mime"] . ".";

	$data = $dblink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
}
else {
    echo "File is not an image.";
 
}

$posta = $_SESSION['login_email'];
$sql="INSERT INTO ARGAZKIAK(POSTA,ARGAZKIA,ETIKETA,IZENA) VALUES ('{$posta}','{$data}','{$etiketa}','{$izena}')";

// SQL exekutatu 
$result = $dblink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	echo 'Zure argazkia gehitu da';
	//echo "<p><a href='./erregistroakikusi.php'> Erregistroak ikusi </a>";
}else{
	echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dblink->error}</pre>";
}

// DB deskonektatzeko
include_once "deskonexioa.php";
?>
