
<?php  //Start the Session
session_start();
 require('config.php');

if (isset($_POST['email']) and isset($_POST['psw'])){

$email = $_POST['email'];
$psw = $_POST['psw'];

$query = "SELECT * FROM `admin` WHERE email='$email' and psw='$psw'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if($count==TRUE)
    header('location:adminh.php');
else
    echo '<script language="javascript">';
echo 'alert("Please enter valid Credentials")';
echo '</script>';
    echo "<a href=\"javascript:history.go(-1)\">GO BACK</a>";
   
    }

 
?>