<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

$erabiltzailea = 'SELECT POSTA,IZENA,ABIZENAK,ADMINISTRATZAILE FROM ERABILTZAILEA' ;
$ema = $dblink->query($erabiltzailea);
echo "<h2>Erabiltzaileak ikusi</h2>";
echo "<div id='table-wrapper'>";
echo "<div id='table-scroll'>";
echo "<table id='example' style='font-size:0.9em;' border=1><thead><tr><th> POSTA </th><th> IZENA </th><th> ABIZENAK </th></tr></thead>";
echo "<tbody>";
while( $row = $ema->fetch_array(MYSQLI_BOTH)) {
if($row['ADMINISTRATZAILE']!=1){
echo '<tr><td>'.$row['POSTA'].'</td> <td>'.$row['IZENA'].'</td> <td>'.$row['ABIZENAK'].'</td></tr>';
}
}
echo "</tbody>";
echo '</table>';
echo "</div>";
echo "</div>";
include "deskonexioa.php";
?>
