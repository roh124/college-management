<html>
<head>
    <script>
    function validate()
{ 
    var email = document.StudentRegistration.email.value;
  atpos = email.indexOf("@");
  dotpos = email.lastIndexOf(".");
 if (email == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID")
     document.StudentRegistration.email.focus() ;
     return false;
 }
    if ( ( StudentRegistration.gender[0].checked == false ) && ( StudentRegistration.gender[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }   
    
    
    
}
</script>
    <style>
    body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("1234.jpg");

  min-height: 760px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}


.container {
  position: absolute;
  right:500;
  margin: 30px;
  max-width:300px;
 max-height: 600px;
  padding: 20px;
  background-color: white;
}

input[type=text],input[type=text],input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background:white;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: white;
  outline: none;
}


.btn {
  background-color: lawngreen;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 45%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
        .column{

 

  min-height: 50px;

  
  background-position: left;
  background-repeat: no-repeat;
  background-size:auto;
  right:100;
}
    
    
    
    
    
    </style>
    <title>
    signup</title></head>
    <body>
    <div class="bg-img">
        
        
        
  <form action="process.php" class="container" method="post" enctype="multipart/form-data" name="StudentRegistration" onsubmit="return(validate());">
    <h1>Signup</h1>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Username" name="username" required>
      
      <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
      <label for="gender"><b>Gender</b></label>
<br><br>     <input type="radio" name="gender" value="Student" >Male<br>
  <input type="radio" name="gender" value="Teacher">Female<br><br>
  

    <button type="submit" class="btn" name="signup">Signup</button>
    <button type="reset" class="btn" >Cancel</button><br><br>
      
      <a href="adminl.php">Log in</a>
      
  </form>
        
</div>
        
    
    
    </body>
</html>