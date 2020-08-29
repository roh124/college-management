<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
   min-height:1000px;
    background-color:darkcyan;
    padding: 8px;
  /* Center and scale the image nicely */
    
  background-position: center;
  background-repeat:no-repeat;
  background-size:cover;
    position: relative;
   
}
    
#nav {
list-style:none inside;
margin:0;
padding:0;
text-align:center;
    position:fixed;
    
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
    .footer {
   position:fixed;
   left: 0;
   bottom: 0;
   width: 100%;
        height:15%;
   background-color:black;
   color: white;
   text-align:left;
}    

.bgimg-1, .bgimg-2, .bgimg-3 {
  position:static;
  opacity:1.0;
  background-attachment:fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size:cover;

}
.bgimg-1 {
  background-image: url("32.png");
  min-height: 150%;
}

.bgimg-2 {
  background-image: url("36.jpg");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("31.jpg");
  min-height: 400px;
}
    
.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
    position: static;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
</style>
</head>
<body>
    
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
    </div><br><br><br>
    

<div class="bgimg-1">
  <div class="caption">
  <span class="border"></span>
  </div>
</div>

<div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
  <h3 style="text-align:center;">About College</h3>
  <p>Amritsar College of Engineering and Technology is an autonomous college affiliated to Punjab Technical University, Kapurthala. It is situated in Manawala, at a close distance to the city of Amritsar, Punjab, India. The institute was established in 2002, by the Amritsar International Foundation.AGC world-class environment and superior education system extends a warm welcome to international students who seek quality education in India. It has always been our priority to make the experience a globally acceptable one and enable the conflation of different cultures to promote intermixing of various schools of thoughts.'</p>
</div>

<div class="bgimg-2">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color:green;"></span>
  </div>
</div>

<div style="position:static;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>Acet provide quality education to the students and enhance the confidence in student to get best out of it.It has always been our priority to make the experience a globally acceptable one and enable the conflation of different cultures to promote intermixing of various schools of thoughts.</p>
  </div>
</div>

<div class="bgimg-3">
  <div class="caption">
  <span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"></span>
  </div>
</div>

<div style="position:static;">
  <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
  <p>The college day remember forever the memories,fun achievements everything you done in college is with you in whole life.It has always been our priority to make the experience a globally acceptable one and enable the conflation of different cultures to promote intermixing of various schools of thoughts.</p>
  </div>
</div>



   
    <div class="bgimg-1">
  <div class="caption">
  <span class="border">Campus View</span>
  </div>
</div>
    <br><br>
<hr>        

 

</body>
</html>