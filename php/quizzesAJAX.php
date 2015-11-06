<?php
include "konexioaAJAX.php";
include_once "sesioa.php";

ekintza("",$dblink);
$email = $_SESSION['login_email'];
$galdera = "SELECT * FROM GALDERA WHERE POSTA='{$email}'" ;
$ema = $dblink->query($galdera);
echo "<h2>Galderak ikusi</h2>";
echo '<table border=1><tr><th> ID </th><th> GALDERA </th><th> ERANTZUNA </th><th> ZAILTASUNA </th></tr>';
while( $row = $ema->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'.$row['ID'].'</td> <td>'.$row['GALDERA'].'</td> <td>'.$row['ERANTZUNA'].'</td> <td>'.$row['ZAILTASUNA'].'</td></tr>';
}
echo '</table>';
include "deskonexioa.php";
?>
