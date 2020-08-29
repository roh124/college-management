<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  
  
    padding:7px;
    background-image:url('27.jpg');
         min-height:1000px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:repeat;
  background-size:cover;
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
    
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
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
</ul><br><br><br><br><br>
    
    <div class="footer">
</div>


<h2 style="text-align:center">Gallery</h2>
<h3 style="text-align:center">Cheerish Moments with Students which Participated in lots of Competition and get Rewarded with Prizes, Momento </h3>

<div class="row">
  <div class="column">
    <img src="19.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="20.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="21.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="22.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="22.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
    <div class="column">
    <img src="22.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 6</div>
      <img src="19.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 6</div>
      <img src="20.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 6</div>
      <img src="21.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 6</div>
      <img src="22.jpg" style="width:100%">
    </div>
      
      <div class="mySlides">
      <div class="numbertext">5 / 6</div>
      <img src="22.jpg" style="width:100%">
    </div>
      
      
      <div class="mySlides">
      <div class="numbertext">6 / 6</div>
      <img src="22.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="19.jpg" style="width:100%" onclick="currentSlide(1)" alt="Group Discussion">
    </div>
    <div class="column">
      <img class="demo cursor" src="20.jpg" style="width:100%" onclick="currentSlide(2)" alt="Convocation Day">
    </div>
    <div class="column">
      <img class="demo cursor" src="21.jpg" style="width:100%" onclick="currentSlide(3)" alt="Annual Day">
    </div>
    <div class="column">
      <img class="demo cursor" src="22.jpg" style="width:100%" onclick="currentSlide(4)" alt="Extempore competition">
    </div>
      <div class="column">
      <img class="demo cursor" src="22.jpg" style="width:100%" onclick="currentSlide(5)" alt="Extempore competition">
    </div>
      <div class="column">
      <img class="demo cursor" src="22.jpg" style="width:100%" onclick="currentSlide(6)" alt="Extempore competition">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>