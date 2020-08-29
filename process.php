<?php
if (isset($_POST['signup'])){
$username= $_POST['username'];
$email= $_POST['email'];
$psw= $_POST['psw'];
$gender= $_POST['gender'];

$con = mysqli_connect('localhost','root','','project_db');


    
$sql="INSERT INTO `signup`(`username`, `email`, `psw`, `gender`) VALUES ('$username','$email','$psw','$gender')";

 
$run=mysqli_query($con,$sql);
if($run==TRUE)
    header('location:signup.php');
else
    echo "ERROR!";
    }
 
mysqli_close($con);

    
    ?>
    