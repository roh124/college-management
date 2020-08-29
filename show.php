<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "project_db"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM signup";
 
 
echo '<table border="1" cellspacing="10" cellpadding="20" align="center"> 
      <tr> 
          <td> <font face="Arial">Username</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Password</font> </td> 
          <td> <font face="Arial">Gender</font> </td> 
    </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["email"];
        $field3name = $row["psw"];
        $field4name = $row["gender"];
       
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
            </tr>';
    }
    $result->free();
} 
?>
</body>
</html>