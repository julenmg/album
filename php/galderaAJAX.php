<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

ekintza("review",$dblink);
$galdera = "SELECT * FROM GALDERA" ;
$ema = $dblink->query($galdera);
echo "<h2>Galderak ikusi</h2>";
echo "<table id='example' style='height:300px;font-size:1.3em;' cellspacing='0'><thead><tr><th> ID </th><th> GALDERA </th><th> ERANTZUNA </th><th> ZAILTASUNA </th></tr></thead>";
echo "<tbody>";
while( $row = $ema->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'.$row['ID'].'</td> <td>'.$row['GALDERA'].'</td> <td>'.$row['ERANTZUNA'].'</td> <td>'.$row['ZAILTASUNA'].'</td></tr>';
}
echo "</tbody>";
echo '</table>';
include "deskonexioa.php";
?>
