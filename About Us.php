<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  background: linear-gradient(141deg, #F08080 0%, #1fc8db 51%, #FFA07A 75%);
  font-size: 17px;
     min-height:4000px;
    padding: 8px;
  /* Center and scale the image nicely */
    
  background-position: center;
  background-repeat:no-repeat;
  background-size:cover;
  position:relative;

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

#myVideo {
  position:static;
  right: 0;
  margin-top:500px;
  min-width:105%; 
  min-height:1%;
}

.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container {
      text-align: center;
  }
  .container img {
      margin: auto;
      float: none;
      display: block;
  }
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color:coral;
  color: white;
}

.fa {font-size:50px;}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.1s;
  width:95%;
  
}

.card:hover {
  box-shadow: 0 8px 20px 0 rgba(0,0,0,0.2);
}

.containers {
  padding: 2px 14px;
}
    .column {
  float: left;
  width: 12.45%;
  padding: 3px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
    
    .containerss {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #4CAF50;}
.css {width: 80%; background-color: #2196F3;}
.js {width: 65%; background-color: #f44336;}
.php {width: 60%; background-color:#808080;}
.Agri{width:73%; background-color:black;}
    
.containersss {
  position: static;
  font-family: Arial;
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
    </div><br><br><br><br>
    <h1 align="center">College Adminstration</h1><br>
    
    <div class="row">
  <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>
 <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>       
  
        <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   
    
        <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   
        
        <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   
        
        <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   
        
  <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   
    
    <div class="column">
    <div class="card">
  <img src="14.jpg" alt="Avatar" style="width:100%">
  <div class="containers">
    <h4><b>John Doe</b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
</div>   

</div>
<hr>
<h1 align="center">Our Skills</h1>
    
    <p>Enginerring</p>
<div class="containerss">
  <div class="skills html">90%</div>
</div>

<p>Hotel Management</p>
<div class="containerss">
  <div class="skills css">80%</div>
</div>

<p>Post Graduation</p>
<div class="containerss">
  <div class="skills js">65%</div>
</div>

<p>Management Courses</p>
<div class="containerss">
  <div class="skills php">60%</div>
</div>
    
<p>Agriculture</p>
<div class="containerss">
    <div class="skills Agri">73%</div>
</div>
<hr>
<h1 align="center">Events</h1>
 <div class="row">
    <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>
    
   <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     <div class="column"> 
<div class="containersss">
  <img src="216.jpg" alt="Nature" style="width:180px;">
  
</div>
</div>  
     
     
     
    </div>

<video autoplay muted loop id="myVideo">
  <source src="WhatsApp%20Video%202019-07-10%20at%2010.24.09%20AM.mp4" type="video/mp4">
  
</video>
    <h2 >*************************************Sub Menus of Nav bar will show after this Video************************************</h2>
<hr>
<h1 align="center">Our Shining Stars</h1>
<div class="container">
  <img src="16.jpg" alt="Avatar" style="width:90px">
  <p><span>Rohan </span> Placed in AMAZON</p>
  <p>AGC gives me alot of opportunity with which i will explore alot They also prepare us for the placements like prepration for interviews,Mock test so if you have callibar you will do best in this college.</p>
</div>

<div class="container">
  <img src="14.jpg" alt="Avatar" style="width:90px">
  <p><span>Mohit</span> Placed In TCS</p>
  <p> AGC gives me alot of opportunity with which i will explore alot They also prepare us for the placements like prepration for interviews,Mock test so if you have callibar you will do best in this college.</p>
</div>
<hr>
    <h1 align="center">Success Rates</h1>
<div class="row">
  <div class="column">
    <div class="card">
      <p><i class="fa fa-user"></i></p>
      <h3>5000+</h3>
      <p>Students</p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <p><i class="fa fa-university"></i></p>
      <h3>700+</h3>
      <p>Campus Events</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-globe"></i></p>
      <h3>245+</h3>
      <p>High Profile Visitor</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <p><i class="fa fa-trophy"></i></p>
      <h3>254+</h3>
      <p>Alumni</p>
    </div>
  </div>
    
     <div class="column">
    <div class="card">
      <p><i class="fa fa-first-order"></i></p>
      <h3>10+</h3>
      <p>Top Ranked</p>
    </div>
  </div>
    
     <div class="column">
    <div class="card">
      <p><i class="	fa fa-thumbs-o-up"></i></p>
      <h3>70%</h3>
      <p>Students choice</p>
    </div>
  </div>
     <div class="column">
    <div class="card">
      <p><i class="	fa fa-check-square-o"></i></p>
      <h3>2500+</h3>
      <p>Placed Students</p>
    </div>
  </div>
     <div class="column">
    <div class="card">
      <p><i class="fa fa-child"></i></p>
      <h3>95%</h3>
      <p>Academic Record</p>
    </div>
  </div>
    
</div>



</body>
</html>