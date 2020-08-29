<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "project_db"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM contact";
 
 
echo '<table border="1" cellspacing="10" cellpadding="20" align="center"> 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Complaint</font> </td> 
          
    </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["name"];
        $field2name = $row["email"];
        $field3name = $row["Complaint"];
     
       
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  
            </tr>';
    }
    $result->free();
} 
?>
</body>
</html>