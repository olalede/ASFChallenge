<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

<?php
session_start();

?>

<?php require_once ("secured/database.php"); ?> 




<?function countUsers()
{
    global $database;
    $sql = "SELECT COUNT(*) FROM user";
    if ($result=mysqli_query($database, $sql)){
        $row= mysqli_fetch_array($result);
        $rowcount = $row[0];
        mysqli_free_result($result);
    }
    return $rowcount;
}
?>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">

<!-- Plugin CSS -->
<link rel="stylesheet" href="device-mockups/device-mockups.min.css">

<!-- Custom styles for this template -->
<link href="css/new-age.min.css" rel="stylesheet">

</head>

<body id="page-top">

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">BGSU CS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="welcome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="https://www.bgsu.edu/arts-and-sciences/computer-science/faculty-and-staff.html">Meet the Faculty & Staff</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead">
    
      <div class="row h-100">
        <div class="col-lg-7 my-auto">
          <div class="header-content mx-auto">
            <h1 class="mb-5">Bowling Green State University Department Of Computer Science</h1>
            <a href="index.php" class="btn btn-outline btn-xl js-scroll-trigger">Sign Up Now For Free!!</a><br>
           <br>
           <br>
            <a href="login.php" class="btn btn-outline btn-xl js-scroll-trigger">Log In</a>
          </div>
        </div>
        <div class="col-lg-5 my-auto">
          <div class="device-container">
            
              <div class="device">
                <div class="screen">
                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                  <img src="img/logo.png" class="img-fluid" alt="">
                </div>
                <div class="button">
                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                </div>
              </div>
            </div>
      
       
      </div>
    </div>
  </header>


  <section class="download bg-primary text-center" id="download">
    <div class="container">
      <div class="row">
        <div class="col-md-8 mx-auto">
          <h2 class="section-heading" color="white">Discover!</h2>
          <p style="color:white;">The Current Number Count Of Users That Have Sign Up For This Event Is: <? echo countUsers();?>. Sign Up Now To Get Started!</p>
        </div>
      </div>
    </div>
  </section>

  <style>

#signupsec {
  background-color: blue;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
}

body{
  background: #4f2c1d;
  margin: 0;
  width: 100%;
} 

</style>
  <section class="signupsec">
    <div class="cta-content">
    <video autoplay loop class="video-background" muted plays-inline>
            <source src="https://www.bgsu.edu/content/dam/BGSU/videos/home/2019/One-Day-2019.mp4" type="video/mp4">
            <div class="container">
            <a href="index.php" class="btn btn-outline btn-xl js-scroll-trigger">Let's Get Started!</a>
</video>
     
        
      </div>
    </div>
    <div class="overlay"></div>
  </section>

  <section class="contact bg-primary" id="contact">
    <div class="container">
      <h2>Check Out Our Social Media!</h2>
      <ul class="list-inline list-social">
        <li class="list-inline-item social-twitter">
          <a href="https://twitter.com/bgsu_cs">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item social-facebook">
          <a href="https://www.facebook.com/BGSU-Computer-Science-Department-215511525511014/">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li>
        <li class="list-inline-item social-google-plus">
          <a href="https://plus.google.com/u/0/110354287896877008483">
            <i class="fab fa-google-plus-g"></i>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <footer>
    <div class="container">
    ACCESSIBILITY.
            <br>
            <a href="https://www.bgsu.edu/accessibility.html">Report an Issue</a> <p>
            Accessibility Enhanced Pages 
            <br>
            BGSU offers alternative versions of all of its pages for our users. You can select the high-contrast 
            version below to persist throughout your BGSU website experience.
            <br>
          
                Bowling Green State University (BGSU) has built its website around the Standards of the World Wide 
                Web Consortium's (W3C) Hyper Text Markup Language (HTML) 5 and Cascading Style Sheets (CSS). 
                the Rehabilitation Act and detailed in section 1194.22 of the Code of Federal Regulations, "Web-
                based intranet and internet information and applications" <a href="https://www.section508.gov/">(https://www.section508.gov/)</a>.
                
                <p></p>
                BGSU utilizes many webmasters across campus to maintain all of its web properties. Keeping the
                BGSU website in compliance with section 508 is a joint effort between Accessibility Services,
                Marketing and Communications and Information Technology Services. If any page is discovered to
                be inaccessible, please report it using the above link and we will ensure that the issue is addressed.

                <p></p>
                <p>EVENTS</p>
                <p></p>
                To our guests with disabilities, please indicate if you need special services, assistance or
                appropriate modifications to fully participate in this event by contacting Accessibility Services,
                <a href="https://www.bgsu.edu/accessibility-services.html">access@bgsu.edu</a>, 419-372-8495. Please notify us prior to the event.
                <br>
    
    </div>
  </footer>

     <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/new-age.min.js"></script>

  </body>
</html>



