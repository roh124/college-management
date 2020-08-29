<html>
<body>
<?php 
$username = "root"; 
$password = ""; 
$database = "project_db"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM onlinereg";
 
 
echo '<table border="1" cellspacing="10" cellpadding="20" align="center"> 
      <tr> 
          <td> <font face="Arial">Textnames</font> </td> 
          <td> <font face="Arial">Fathername</font> </td> 
          <td> <font face="Arial">Paddress</font> </td> 
          <td> <font face="Arial">Personal Address</font> </td> 
          <td> <font face="Arial">Sex</font> </td>
          <td> <font face="Arial">City</font> </td>
          <td> <font face="Arial">Course</font> </td>
          <td> <font face="Arial">District</font> </td>
          <td> <font face="Arial">State</font> </td>
          <td> <font face="Arial">Pincode</font> </td>
          <td> <font face="Arial">Emailid</font> </td>
          <td> <font face="Arial">Dob</font> </td>
          <td> <font face="Arial">Mobileno.</font> </td>
    </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["textnames"];
        $field2name = $row["fathername"];
        $field3name = $row["paddress"];
        $field4name = $row["personaladdress"];
        $field5name = $row["sex"];
        $field6name = $row["City"];
        $field7name = $row["Course"];
        $field8name = $row["District"];
        $field9name = $row["State"];
        $field10name = $row["pincode"];
        $field11name = $row["emailid"];
        $field12name = $row["dob"];
        $field13name = $row["mobileno"];
       
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td>
                  <td>'.$field5name.'</td>
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$field9name.'</td>
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td>
                  <td>'.$field12name.'</td>
                  <td>'.$field13name.'</td>
                  
                                    

            </tr>';
    }
    $result->free();
} 
?>
</body>
</html>