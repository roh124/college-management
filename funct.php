<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-image: url('25.jpg');
  padding: 7px;
  
    min-height:1500px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:round;
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
    
    
    
/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 20px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
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
</ul><br><br><br><br>
    
    <div class="footer">
            <div>
      &copy; Copyright SYNQ.fm Inc.
    </div>
</div>
    


<!-- MAIN (Center website) -->
<div class="main">


<h2>Funct/tech...</h2>

<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('nature')"> Tech.Events</button>
  <button class="btn" onclick="filterSelection('cars')"> Functions</button>
  <button class="btn" onclick="filterSelection('people')"> Competition</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="19.jpg" alt="Mountains" style="width:100%">
      <h4>Paryas</h4>
      <p>Technical Event</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="20.jpg" alt="lights" style="width:100%">
      <h4>Convocation day</h4>
      <p>The Day we remember</p>
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="21.jpg" alt="Nature" style="width:100%">
      <h4>Annual day</h4>
      <p>31st Annual day</p>
    </div>
  </div>
  
  <div class="column cars">
    <div class="content">
      <img src="22.jpg" alt="Car" style="width:100%">
      <h4>Group Discussion</h4>
      <p>Talent brings Opportunity</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="23.jpg" alt="Car" style="width:100%">
      <h4>Yoga day</h4>
      <p>Health is Wealth</p>
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="24.jpg" alt="Car" style="width:100%">
      <h4>Classic</h4>
      <p>Electric bulb</p>
    </div>
  </div>

  <div class="column people">
    <div class="content">
      <img src="238.jpg" alt="Car" style="width:100%">
      <h4>Foundation day</h4>
      <p>The day we are waiting for...</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="226.jpg" alt="Car" style="width:100%">
      <h4>ASP Placement</h4>
      <p>Acet means Placements</p>
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="10.jpg" alt="Car" style="width:100%">
      <h4>Library</h4>
      <p>Books are the real friends</p>
    </div>
  </div>
<!-- END GRID -->
</div>
    

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
