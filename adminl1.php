

<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['login'])) {
if (empty($_POST['email']) || empty($_POST['psw'])) {
$error = "Email or Password is invalid";
}
else{
// Define $username and $password
$email = $_POST['email'];
$psw= $_POST['psw'];
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "project_db");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT email, psw from signup where email=? AND psw=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $email, $psw);
$stmt->execute();
$stmt->bind_result($email, $psw);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row {
$_SESSION['email'] = $email; // Initializing Session
header("location: userh.php"); // Redirecting To Profile Page

}

mysqli_close($conn); // Closing Connection
}
?>



