<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/all.min.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <title>Late Night Cafe</title>
</head>

<body>
  <!-- Start Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">Late Night Cafe</a>
  
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button> 
    
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
    <!--    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li> -->
      </ul>
    </div>
  </nav> <!-- End Navigation -->

  <!-- Start Header Jumbotron-->
  <header class="jumbotron back-image" style="background-image: url(images/cafe.jpg);">
    <div class="myclass mainHeading">
   <center>  <h1 name = "welcometxt " class="text-uppercase text-light font-weight-bold">Welcome To Late Night Cafe</h1></center> 
   <center>   <p class="font-italic text-light "> " Come As Friends leave as Family " </p></center> <br> <br>
   <center>   <a href="Admin/login.php" class="btn btn-success mr-4">Admin Login</a></center>
    </div>
  </header> <!-- End Header Jumbotron -->

  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h2 class="text-center">OUR VISION</h2>
      <p>
      Our mission is to be the most sustainable restaurant in JOrhat by sourcing our ingredients locally, supplementing produce with herbs grown on our rooftop garden, and giving back to the community through urban farming education.
  and  to give our customers a place to celebrate life’s special moments by offering the best food, service, and ambiance in Jorhat.


      </p>

    </div>
  </div>
  <!--Introduction Section End-->
  <!-- Start Services -->
  <div class="container text-center border-bottom" id="Services">
    <h2>We Provide </h2>
    <div class="row mt-4">
      <div class="col-sm-4 mb-4">
        <a href="#"><i class = "fas fa-burger-soda  fa-8x text-primary"></i></a>
        <h4 class="mt-4">Best in Class Food</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-truck fa-8x text-primary"></i></a>
        <h4 class="mt-4">Home Delevery</h4>
      </div>
      <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-coffee fa-8x text-info"></i></a>
        <h4 class="mt-4">Booking For Private Party</h4>
      </div>
    </div>
  </div> <!-- End Services -->

 

  <!--Start Contact Us-->
 
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Debasish Bora & Kawstabh Dutta &copy; 2020.
          </small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  <!-- Boostrap JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
</body>

</html>