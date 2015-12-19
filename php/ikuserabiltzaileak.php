<?php

include "php/konexioa.php";

$erabiltzaileak = "SELECT * FROM ERABILTZAILEA" ;
$result = $dblink->query($erabiltzaileak);
echo '<table border=1><tr><th> POSTA </th><th> IZENA </th><th> ABIZENAK </th><th> PASAHITZA </th></tr>';
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'. $row['POSTA'].'</td> <td>'.$row['IZENA'].'</td> <td>'.$row['ABIZENAK'].'</td> <td>'.$row['PASAHITZA'].'</td></tr>';
}
echo '</table>';

include "deskonexioa.php";
?>
