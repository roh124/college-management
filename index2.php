<?php
 
if(isset($_POST['Submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pcode = $_POST['pcode'];

    
    $connection = mysqli_connect('localhost','root', '','project_db');
$sql="INSERT INTO `part`(`name`, `lname`, `email`, `pcode`) VALUES ('$name','$lname','$email','$pcode')";


 
$run=mysqli_query($connection,$sql);
if($run==TRUE)
    echo "data entered  successfully";
else
    echo "ERROR!";
    
    }

 // Closing Connection with Server
?>