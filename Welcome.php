<?php
session_start();

if(isset($_SESSION["uemail"])){

echo"Welcome ".$_SESSION["uemail"];
}

else{
    echo"<h1 align='center'>You are not login</h1>";}

?>
<h2><a href="logout.php" style="float:right">LOGOUT</a></h2>