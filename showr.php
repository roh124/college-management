<?php
include('session.php');
if(!isset($_SESSION['email'])){
    header('location:adminl.php');
}
    
?>
<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "project_db"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT name,roll,phy,chem,math,eng,pun FROM res where email='$email'";
 
 
echo '<table border="1" cellspacing="10" cellpadding="20" align="center"> 
      <tr> 
          <td> <font face="Arial">name</font> </td> 
          <td> <font face="Arial">Rollno</font> </td> 
          <td> <font face="Arial">Physics</font> </td> 
          <td> <font face="Arial">Chemistry</font> </td> 
          <td> <font face="Arial">Maths</font> </td>
          <td> <font face="Arial">English</font> </td>
          <td> <font face="Arial">Punjabi</font> </td>
    </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["roll"];
        $field3name = $row["phy"];
        $field4name = $row["chem"];
        $field5name = $row["math"];
        $field6name = $row["eng"];
        $field7name = $row["pun"];
       
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
            </tr>';
    }
    $result->free();
} 
?>
</body>
</html>