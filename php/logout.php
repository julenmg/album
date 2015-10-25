<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../layout.php"); // Redirecting To Home Page
}
?>
