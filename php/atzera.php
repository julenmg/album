<?php
session_start();// Starting Session

if(!isset($_SESSION['login_email'])){
//mysql_close($connection); // Closing Connection
echo "<span class='chyron'><em><a href='layout.html'>&laquo; atzera</a></em></span>";
}
else{echo "<span class='chyron'><em><a href='layoutBalidatuta.html'>&laquo; atzera</a></em></span>";}
?>

