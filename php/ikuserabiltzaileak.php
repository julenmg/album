<?php
//mysql_connect("mysql.hostinger.es","u217085219_root","123456") or die(mysql_error());
mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("quiz") or die(mysql_error());
$erabiltzaileak = mysql_query( "SELECT * FROM ERABILTZAILEA" );
echo '<table border=1><tr><th> POSTA </th><th> IZENA </th><th> ABIZENAK </th><th> PASAHITZA </th><th> TELEFONOA </th><th> ESPEZIALITATEA </th></tr>';//<th> IRUDIA </th>
while( $row = mysql_fetch_array( $erabiltzaileak )) {
echo '<tr><td>'. $row['POSTA'].'</td> <td>'.$row['IZENA'].'</td> <td>'.$row['ABIZENAK'].'</td> <td>'.$row['PASAHITZA'].'</td> <td>'.$row['TELEFONOA'].'</td> <td>'
.$row['ESPEZIALITATEA'].//'</td> <td>'. '<img alt="errorea" src="data:image/jpeg;base64,' . base64_encode($row['IRUDIA']) . '" width="290" height="290">'.
'</td></tr>';
}
echo '</table>';
?>