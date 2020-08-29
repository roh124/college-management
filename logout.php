<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: adminl.php"); // Redirecting To Home Page

?>