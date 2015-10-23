<?php
include "konexioa.php";
$galdera = "SELECT * FROM GALDERA" ;
$result = $dblink->query($galdera);
echo '<table border=1><tr><th> GALDERA </th><th> ERANTZUNA </th><th> ZAILTASUNA </th></tr>';
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'.$row['GALDERA'].'</td> <td>'.$row['ERANTZUNA'].'</td> <td>'.$row['ZAILTASUNA'].'</td></tr>';
}
echo '</table>';
include "deskonexioa.php";
?>
