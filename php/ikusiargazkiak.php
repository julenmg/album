<?php

include "php/konexioa.php";

$argazkiak = "SELECT ARGAZKIA FROM ARGAZKIAK" ;
$result = $dblink->query($argazkiak);
echo '<table border=1><tr><th> ARGAZKIAK </th></tr>';
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'.'<img alt="Ez da irudirik igo" src="data:image/jpeg;base64,'.base64_encode($row['ARGAZKIA']) . '" width="170" height="170">'.'</td></tr>';
}
echo '</table>';

include "deskonexioa.php";
?>
