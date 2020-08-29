<!Doctype html>
<html>
<body><head>
<style>
    
    body{
    background-image:url(11.jpg);
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
</style>
</head>
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
<li><a href="onlinereg.php">Online Reg.</a></li>
<li><a href="downloads.php">Down.Data</a></li>
<li><a href="About%20Us.php">About Us</a></li>
<li><a href="Contact%20Us.php">Contact Us</a></li>
</ul>
    
    <div class="footer">
    </div>
</body>
</html>

		