<?php

include_once "konexioa.php";

$data = null;
if($_FILES["irudiaIgo"][size] != 0){
if(!empty(getimagesize($_FILES["irudiaIgo"]["tmp_name"]))) {
     echo "File is an image - " . $check["mime"] . ".";

	$data = $dblink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
}
else {
    echo "File is not an image.";
 
}
}
$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,TELEFONOA,ESPEZIALITATEA,IRUDIA)
		VALUES ('{$posta}','{$izena}','{$abizenak}','{$pasahitza}','{$telefonoa}','{$espezialitatea}','{$data}')";

// SQL exekutatu 
$result = $dblink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	echo 'Zure fitxategia gehitu da';
	echo "<p><a href='php/erregistroakikusi.php'> Erregistroak ikusi </a>";
}else{
	echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dblink->error}</pre>";
}
echo "Erregistro bat gehitu da";

// DB deskonektatzeko
include_once "deskonexioa.php";
?>
