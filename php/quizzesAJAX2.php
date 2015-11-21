<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

ekintza("review",$dblink);
$galdera = "SELECT * FROM GALDERA" ;
$ema = $dblink->query($galdera);
echo "<h2>Galderak ikusi</h2>";
echo "<div id='table-wrapper'>";
echo "<div id='table-scroll'>";
echo "<table id='example' style='font-size:0.9em;' border=1><thead><tr><th> ID </th><th> GALDERA </th><th> ERANTZUNA </th><th> ZAILTASUNA </th><th> POSTA </th></tr></thead>";
echo "<tbody>";
while( $row = $ema->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'.$row['ID'].'</td> <td>'.$row['GALDERA'].'</td> <td>'.$row['ERANTZUNA'].'</td> <td>'.$row['ZAILTASUNA'].'</td><td>'.$row['POSTA'].'</td></tr>';
}
echo "</tbody>";
echo '</table>';
echo "</div>";
echo "</div>";
include "deskonexioa.php";
?>