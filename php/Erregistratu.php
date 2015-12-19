<?php

include_once "konexioa.php";

$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,ADMINISTRATZAILE)
		VALUES ('{$posta}','{$izena}','{$abizenak}','{$pasahitza}','2')";

// SQL exekutatu 
$result = $dblink->query($sql);
 
// Baieztatu ea SQL ondo exekutatu den
if($result) {
	echo 'Zure fitxategia gehitu da';
	echo "<p><a href='./erregistroakikusi.php'> Erregistroak ikusi </a>";
}else{
	echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dblink->error}</pre>";
}
echo "Erregistro bat gehitu da";

// DB deskonektatzeko
include_once "deskonexioa.php";
?>
