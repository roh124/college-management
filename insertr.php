<?php
 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$name = $_POST['name'];
$email = $_POST['email'];
$roll = $_POST['roll'];
$phy = $_POST['phy'];
$chem = $_POST['chem'];
$math = $_POST['math'];
$eng = $_POST['eng'];
$pun = $_POST['pun'];
    
    $connection = mysqli_connect('localhost','root', '','project_db');
$sql="INSERT INTO `res`(`name`, `email`, `roll`, `phy`, `chem`, `math`, `eng`, `pun`) VALUES ('$name','$email','$roll','$phy','$chem','$math','$eng','$pun')";


 
$run=mysqli_query($connection,$sql);
if($run==TRUE)
    echo "data entered  successfully";
else
    echo "ERROR!";
    
    }

 // Closing Connection with Server
?>