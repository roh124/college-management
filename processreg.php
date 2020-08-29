<?php
if (isset($_POST['submit'])){
$textnames= $_POST['textnames'];
$fathername= $_POST['fathername'];
$paddress= $_POST['paddress'];
$personaladdress= $_POST['personaladdress'];
$sex= $_POST['sex'];
$City= $_POST['City'];
$Course= $_POST['Course'];
$District= $_POST['District'];
$State= $_POST['State'];
$pincode= $_POST['pincode'];
$emailid= $_POST['emailid'];
$dob= $_POST['dob'];
$mobileno= $_POST['mobileno'];

$con = mysqli_connect('localhost','root','','project_db');


    
$sql="INSERT INTO `onlinereg`(`textnames`, `fathername`, `paddress`, `personaladdress`, `sex`, `City`, `Course`, `District`, `State`, `pincode`, `emailid`, `dob`, `mobileno`) VALUES ('$textnames','$fathername','$paddress','$personaladdress','$sex','$City','$Course','$District','$State','$pincode','$emailid','$dob','$mobileno')";

 
$run=mysqli_query($con,$sql);
if($run==TRUE)
    echo "data will send to the college";
 
else
    echo "ERROR!";

    }
?>