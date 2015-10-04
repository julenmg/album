<?php
//mysql_connect("mysql.hostinger.es","u217085219_root","123456") or die(mysql_error());
//mysql_connect("localhost","root","") or die(mysql_error());
$dbLink = new mysqli("mysql.hostinger.es","u217085219_root","123456","u217085219_quiz");
//$dbLink = new mysqli("localhost","root","","quiz");
if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }
/*mysql_select_db("quiz") or die(mysql_error());

$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,TELEFONOA,ESPEZIALITATEA)
		VALUES ('$_POST[POSTA]','$_POST[IZENA]','$_POST[ABIZENAK]','$_POST[PASAHITZA]','$_POST[TELEFONOA]','$_POST[ESPEZIALITATEA]')";
		
if(!mysql_query($sql)){
	die('Errorea: ' . mysql_error());
}
*/
//if(isset($_FILES['irudiaIgo'])) {
    // Ziurtatu errorerik ez dala egon
    //if($_FILES['irudiaIgo']['error'] == 0) {
        // DB konektatzeko
        /*$dbLink = new mysqli('127.0.0.1', 'user', 'pwd', 'myTable');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }*/
        // Igotako irudiaren datuak gorde aldagaietan
        /*$name = $dbLink->real_escape_string($_FILES['irudiaIgo']['name']);
        $mime = $dbLink->real_escape_string($_FILES['irudiaIgo']['type']);
        $data = $dbLink->real_escape_string(file_get_contents($_FILES  ['irudiaIgo']['tmp_name']));
        //$size = intval($_FILES['irudiaIgo']['size']);   
    }
    else {
        echo 'Errore bat egon da igotzen ari zinen bitartean '
           . 'Errore kodea: '. intval($_FILES['irudiaIgo']['error']);
    }
}
else {
    echo 'Errore bat, fitxategia ez da bidali';
}
		$sp = $_POST['ESPEZIALITATEA'];
		
		if(strcmp($sp, "B") == 0){
			$sp = $_POST['BTT'];
		}*/
		$sql="INSERT INTO ERABILTZAILEA(POSTA,IZENA,ABIZENAK,PASAHITZA,TELEFONOA,ESPEZIALITATEA)
		VALUES ('$_POST[POSTA]','$_POST[IZENA]','$_POST[ABIZENAK]','$_POST[PASAHITZA]','$_POST[TELEFONOA]','$_POST[ESPEZIALITATEA]')";
		//,IRUDIA)'{$sp}','{$data}')";
        // SQL exekutatu 
        $result = $dbLink->query($sql);
 
        // Baieztatu ea SQL ondo exekutatu den
        if($result) {
            echo 'Zure fitxategia gehitu da';
        }
        else {
            echo 'Errore bat egon da zure fitxategia gehitzerakoan'
               . "<pre>{$dbLink->error}</pre>";
        }
echo "Erregistro bat gehitu da";
//mysql_close();
// DB deskonektatzeko
    $dbLink->close();
echo "<p><a href='ikuserabiltzaileak.php'> Erregistroak ikusi </a>";
?>