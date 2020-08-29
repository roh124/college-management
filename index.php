<?php
include('adminl1.php'); // Includes Login Script
if(isset($_SESSION['email'])){
header("location: userh.php"); // Redirecting To Profile Page
}
?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("adminl.jpg");

  min-height: 760px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 30px;
  max-width:300px;
 max-height: 600px;
  padding: 20px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: lawngreen;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>


<div class="bg-img">
  <form action="adminl1.php" class="container" method="post">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn" name="login">Login</button>
      <a href="signup.php">  <button type="button" class="btn">Sign up</button></a><br><br>
      <a href="forgot.php">Forgot Password?? </a>
  </form>
</div>


</body>
</html>
