<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "project_db");
session_start();// Starting Session
// Storing Session
$email = $_SESSION['email'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT email from signup where email = '$email'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['email'];
?>