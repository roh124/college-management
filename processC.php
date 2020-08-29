<?php
if (isset($_POST['Submit'])){
$name= $_POST['name'];
$email= $_POST['email'];
$Complaint= $_POST['Complaint'];


$con = mysqli_connect('localhost','root','','project_db');


    
$sql="INSERT INTO `contact`(`name`, `email`, `Complaint`) VALUES ('$name','$email','$Complaint')";

 
$run=mysqli_query($con,$sql);
if($run==TRUE)
    echo "Data submit successfully we will surely contact with you through your email";
else
    echo "ERROR!";
    }
 
mysqli_close($con);

    
    ?>
    