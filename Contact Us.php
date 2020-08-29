
<html>
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us</title>
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
}
      
      
      
      
      </script>
    <style>
        body{
    background-image:url(6.jpg);
         min-height:850px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:repeat;
  background-size:contain;
  position:relative;
        overflow:scroll;
}

#nav {
list-style:none inside;
margin:0;
padding:0;
text-align:center;
    position: fixed;
    
}
#nav li {
display:block;
position:relative;
float:left;
background:darkred; /* menu background color */
}
#nav li a {
display:block;
padding:0;
text-decoration:none;
width:100px; /* this is the width of the menu items */
line-height:60px; /* this is the hieght of the menu items */
color:burlywood; /* list item font color */
}
#nav li li a {font-size:80%;} /* smaller font size for sub menu items */
#nav li:hover {background:white;} /* highlights current hovered list item and the parent list items when hovering over sub menues */
#nav ul {
position:absolute;
padding:0;
left:0;
display:none; /* hides sublists */
}
#nav li:hover ul ul {display:none;} /* hides sub-sublists */
#nav li:hover ul {display:block;} /* shows sublist on hover */
#nav li li:hover ul {
display:block; /* shows sub-sublist on hover */
margin-left:100px; /* this should be the same width as the parent list item */
margin-top:-60px; /* aligns top of sub menu with top of list item */
}
    
/* THE MAINCONTAINER HOLDS EVERYTHING */
.maincontainer{
  position: absolute;
  width: 395px;
  height: 350px;
  background: none;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

}

/* THE CARD HOLDS THE FRONT AND BACK FACES */
.thecard{
  position: relative;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  transform-style: preserve-3d;
  transition: all 0.8s ease;
}

/* THE PSUEDO CLASS CONTROLS THE FLIP ON MOUSEOVER AND MOUSEOUT */
.thecard:hover{
  transform: rotateY(180deg);
}

/* THE FRONT FACE OF THE CARD, WHICH SHOWS BY DEFAULT */
 .thefront{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 20px;
  backface-visibility: hidden;
  overflow: hidden;
     text-align: center;
  background: #ffc728;
  color: #000;
}

/* THE BACK FACE OF THE CARD, WHICH SHOWS ON MOUSEOVER */
.theback{
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  backface-visibility: hidden;
  overflow: hidden;
  background:#ffc728 ;
  color: #333;
  text-align: center;
  transform: rotateY(180deg);
   margin-bottom: 380px;
}


/*This block (starts here) is merely styling for the flip card, and is NOT an essential part of the flip code */
.thefront h1, .theback h1{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-weight: bold;
  font-size: 24px;
  text-align: center;
}

.thefront p, .theback p{
  font-family: 'zilla slab', sans-serif;
  padding: 30px;
  font-weight: normal;
  font-size: 12px;
  text-align: center;
}
/*This block (ends here) is merely styling for the flip card, and is NOT an essential part of the flip code */
        
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
        height:20%;
   background-color: black;
   color: white;
   text-align:left;
}
        .fa {
            float: left;
  padding:10px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
        .fa-instagram {
  background: #125688;
  color: white;
}
        .col1{
             
   margin-left:500px;
}
 .col2{
           
       margin-left: 1250px;
}
</style>
  </head>

  <body>
      
    <div class="maincontainer">

      <div class="thecard">

        <div class="thefront"><h1>Hey buddy Welcome</h1>
         <h2>We are here to help  you,Any query please contact us and get early  update from the organization.</h2>
    
          
          </div>
<form action="processC.php" method="post" enctype="multipart/form-data" name="StudentRegistration" onsubmit="return(validate());">
        <div class="theback"><h1>Contact Us</h1>
            <label for="name"><b>Name</b></label>
    <input type="text" placeholder=" Enter Name" name="name" required><br><br>
             <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br><br>
             <label for="message"><b>Message</b></label>
      <input type="text" placeholder="Enter your query" name="Complaint" required style="height: 100" "width:50"><br><br>&nbsp;
        
    <button type="submit" name="Submit">Submit</button></div>

</form>
      </div>
    </div>
      <ul id="nav">
<li><a href="userh.php">Home</a></li>
<li><a href="#"></a></li>
<li><a href="#">Courses</a>
<ul>
<li><a href="#">BTECH >></a>
    <ul>
    <li><a href="#">CSE</a></li>
    <li><a href="#">MECHANICAL</a></li>
    <li><a href="#">ELECTRONICS</a></li>
    <li><a href="#">ELECTRICAL</a></li>
    <li><a href="#">CIVIL</a></li>
    <li><a href="#">CHEMICAL</a></li>
    <li><a href="#">IT</a></li>
    </ul>
</li>
<li><a href="Bscu.php">BSC</a></li>
<li><a href="#">MSC >></a>
<ul>
<li><a href="#">COMP SCIENCE</a>
<li><a href="#">NON MEDICAL</a>
</ul>
</li>
</ul>
</li>
<li><a href="">Facilities</a>
<ul>
<li><a href="">Hostal</a></li> 
<li><a href="">Library</a></li>
<li><a href="">Medical</a></li>
<li><a href="">Sport</a></li>
<li><a href="">Transport</a></li>
<li><a href="">Canteen</a></li>
</ul>    
</li>
<li><a href="">Examination</a>
 <ul>
<li><a href="">Date Sheet</a></li> 
<li><a href="">Result</a></li>
<li><a href="">Merit List</a></li>
<li><a href="">Syllabus</a></li>
<li><a href="">Reevaluation</a></li>
</ul>       
</li>
<li><a href="">Student</a>
    <ul>
<li><a href="">Down.forms</a></li> 
<li><a href="">Adm Instru</a></li>
<li><a href="">Academic Caln.</a></li>
<li><a href="">Ragging comm.</a></li>
<li><a href="">International stud.</a></li>
</ul>    
</li> 
<li><a href="">Infrastructure</a>
    <ul>
<li><a href="campus.php">Campus View</a></li> 
<li><a href="classroom.php">Classroom</a></li>
<li><a href="library.php">Library</a></li>
<li><a href="conference.php">Conference Hall</a></li>
<li><a href="auditorium.php">Auditorium</a></li>
<li><a href="playground.php">Playgrounds</a></li>
</ul>    
</li>
          
<li><a href="">Events</a>
          <ul>
<li><a href="funct.php">Funct/Tec.event</a></li>
<li><a href="gallery.php">Gallery</a></li>
</ul>
</li>
<li><a href="team.php">Our Team</a></li>
<li><a href="About%20Us.php">About Us</a></li>

<li><a href="Contact%20Us.php">Contact Us</a></li>
         
</ul>
      
      
       <div class="footer">
           <h2>Follow us:</h2>
  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
       <div class="col1">
         <span  class="fa fa-map-marker"></span> 
                     
                <span> 
                    710-B, Advant Navis Business Park,Sector-142, Noida 
               </span>
           </div>
           <div class="col2">
           
               <span  class="fa fa-envelope"></span>
                    <span >xyz@geeksforgeeks.org</span><br>
               <span class="fa fa-phone"></span>
               <span>8427984239</span>
           
           </div>
           </div>
           </body>
</html>