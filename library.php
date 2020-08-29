<!DOCTYPE html>
<html lang="en">
<head>
  <title>Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    * {
  box-sizing: border-box;
}

body {
  background-image: url('55.jpg');
  padding: 7px;
  
    min-height:2700px;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat:repeat;
  background-size:contain;
  position:relative;
        
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
    
        .container{
            position:absolute;
            
            margin-top:80px;
            margin-left: 155px;
        }  
    .carousel-inner img {
      width: 100%;
      height: 100%;
  }
        
        
.content {
     margin-top: 530px;
    color:azure;
  margin-left: 75px;
  font-size: 30px;
}
        .fa {
  padding: 20px;
  font-size: 30px;
  width: 80px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
        .fa:hover {
    opacity: 0.7;
}
        .fa-yahoo {
  background: #430297;
  color: white;
}
        .fa-facebook {
  background: #3B5998;
  color: white;
}
        .fa-twitter{
  background: #007bb5;
  color: white;
}
    
    </style>
    
</head>
<body>

<div class="container">
    
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="43.jpg" alt="Los Angeles" style="width:1450px;
  height:500px;">
      </div>

      <div class="item">
        <img src="48.jpg" alt="Chicago" style="width:1450px;
  height:500px;">
      </div>
    
      <div class="item">
        <img src="49.jpg" alt="New york" style="width:1450px;
  height:500px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
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
</ul><br><br><br><br>
  <div class="content">
      <h1 align="center">Library</h1>
    <p>The Central Library of AGC since its inception in May 2002 has been on the road of development on daily basis. The library houses in 625 sq. ft. area of the College campus and consists of an adequately rich collection of books and literatures, rich with the collection of over 67, 500 books. In addition, a digital library is the part of the main central library and has access to 22 computers and more than 400 non-printed materials for the fulfillment of requirement of the students.</p><br>
    
      <h2><u>1.Library Collection</u></h2>
    <p>The Central Library of ACET is adequately rich in its collection of books catering to most of the branches of knowledge especially in engineering, management studies and computer application. There is a collection of more than 67, 500books (Text, References and General) in the Library</p>
    <h2><u>2.Periodical Section</u></h2>
    <p>The periodical section is subscribing more than 43 journals in print form 191 E-journals under IEEE Consortium and 34 magazines (technical and general) along with the 17 prominent dailie</p>
     
      <h2><u>3.Technical Section</u></h2>
    <p>Central Library has set up a technical section where all the books are well processed. All the books are classified and cataloged according to the 23rd Edition of DDC and AACR-II respectively.</p>
      
      <h2><u>4.Reading area</u></h2>
    <p>It has a seating capacity of about 200 students at a time. The library has three reading halls.</p>
      
      <h2><u>5.Digital Library</u></h2>
    <p>We are living in an age of information explosion where it has become almost impossible for any library or information centre to acquire and store all the literature even in single field. Keeping the same thing in mind the College authorities have decided to set up a Digital Library and has got the membership of DELNET. A Digital Library is a library where reading material is kept in the form of CDs, DVDs, databases and in other microforms. And the same is accessed with the help of computers. Our Digital Library has 22 well equipped computer systems and more than 400 non print materials covering various subjects. Central Library has set up a cell for Digital Library within its premises. It works in two parts i.e. E-learning and DELNET. E-Learning is an on-line education program where the students can access various presentations, seminars, lectures etc. On the other hand, DELNET is a Developing Library Network which is highly helpful for resource sharing.</p>
      
      <h2><u>6.Circulation Section</u></h2>
    <p>The central library strictly follows the management principle i.e. the spirit of hive. Therefore, we are continuously available from 10:00 am to 4:00 pm for the issue and return of the books. Library follows the “Browne Charging System” for the circulation, wherein 4 tickets are issued to each student and all the College employees are entitled to get 5 books issued. </p>
      
     </div> <br><br> <br>
    <div class="w3-container">
  
  <table class="w3-table-all w3-card-4" style="margin-left:255px; width:65%;">
    <tr>
      <th>Head of Central Library</th>
     <th></th>
      
    </tr>
    <tr>
      <td>Name and Designation</td>
      <td>Mr.RohanPreet Singh</td>
      
    </tr>
    <tr>
      <td>Qualification</td>
      <td>M.Com,M.Lib,inf.Science,PGDCA,NVQ</td>
      
    </tr>
    <tr>
      <td>Area of Interest</td>
      <td>Role of DRTC,LIA,UGC in development LIS in India</td>
    </tr>
             
      <tr>
      <td>Adminstration Experience</td>
      <td>12 Years</td>
    </tr>
             
    <tr>
      <td>Contact</td>
      <td>Mob.no:9888449561 preetsingh@gmail.com</td>
    </tr>         
  </table>
</div>
      
    <br>   <br><br><br><br><br><br><br>
  
   
    
    <footer class="page-footer font-small unique-color-dark"      style="background-color:lightblue; width: 100%" >

  <div style="background-color:steelblue;">
    <div class="containers"  align="center" >

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
            <a href="www.google.co.in" ><img src="fb.png" style="width:40px;"></a>
          <!-- Twitter -->
          <a href="" ><img src="t1.png" style="width:40px;"></a>
          <!-- Google +-->
          <a href="" ><img src="li.png" style="width:40px;"></a>
          <!--Linkedin -->
          <a href="" ><img src="in1.png" style="width:40px;"></a>
          <!--Instagram-->
          

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="containers text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold">Company name</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Courses</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="css.html">CSS</a>
        </p>
        <p>
          <a href="wordpress.html">WordPress</a>
        </p>
        <p>
          <a href="ccna.html">CCNA</a>
        </p>
        <p>
          <a href="php.html">PHP</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a href="home.html">Home</a>
        </p>
        <p>
          <a href="myaccount.html">My Account</a>
        </p>
        <p>
          <a href="#!">Lessons</a>
        </p>
        <p>
          <a href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> c127 phase 5 Mohali</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>syte13@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +12345789</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01298744445</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="">SYTE.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    
    
</body>
</html>
