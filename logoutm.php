<?php
session_start();
session_destroy();

header('location:adminm.php');
?>