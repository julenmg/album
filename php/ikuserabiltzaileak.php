<?php
//mysql_connect("mysql.hostinger.es","u583754354_root","123456") or die(mysql_error());
//mysql_connect("localhost","root","") or die(mysql_error());
//mysql_select_db("quiz") or die(mysql_error());
//$dbLink = new mysqli("mysql.hostinger.es","u583754354_root","123456","u583754354_quizz");
//$dbLink = new mysqli("localhost","root","","quiz");
include "konexioa.php";
$erabiltzaileak = "SELECT * FROM ERABILTZAILEA" ;
$result = $dblink->query($erabiltzaileak);
echo '<table border=1><tr><th> POSTA </th><th> IZENA </th><th> ABIZENAK </th><th> PASAHITZA </th><th> TELEFONOA </th><th> ESPEZIALITATEA </th><th> IRUDIA </th></tr>';
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'. $row['POSTA'].'</td> <td>'.$row['IZENA'].'</td> <td>'.$row['ABIZENAK'].'</td> <td>'.$row['PASAHITZA'].'</td> <td>'.$row['TELEFONOA'].'</td> <td>'
.$row['ESPEZIALITATEA'].'</td> <td>'. '<img alt="Ez da irudirik igo" src="data:image/jpeg;base64,' . base64_encode($row['IRUDIA']) . '" width="70" height="70">'.
'</td></tr>';
}
echo '</table>';
include "deskonexioa.php";
?>
