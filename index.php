<?php 
include ('login/server.php');
$db->set_charset("utf8");
?>

<!DOCTYPE html>
<html lang="en">  
<head>   
<meta set charset="utf-8">    
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<title>Chat Kya Soh</title> 

<link rel="icon" href="img/colorful101.png" type="image/png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
<link href="homepage/style.css" rel="stylesheet" type="text/css"  >


</head>

<body>

<div class="wrapper">
	<nav class="navbar navbar-expand-lg navbar-light " id="navbar">
  <a class="navbar-brand" href="index.php"><img src="img/colorful101.png " alt="Image" class=" img-fluid mx-auto d-block" width= "50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto NAVBAR-RIGHT">
      
      <li class="nav-item navbar-right ml-auto">
        <a class="nav-link" id="color" href="login/login.php"><i class="fa fa-user"></i>  Log In</a>
      </li>
      <li class="nav-item navbar-right ml-auto">
        <a class="nav-link" id="color" href="feedback/feedback.html"><i class="fa fa-comments"></i> Feedback</a>
      </li>
       
  
        
      </ul>  
  </div>
</nav>


		<!--Logo and recipes categories-->
		<div class="container">
			<a href="index.php"><img class="img-responsive mx-auto d-block" src="img/colorful101.png" alt="Avatar" width="400"></a>
		</div>

    <div class="container">
    <div class="row">
    <div class="col">
    <div class="card text-center"  style="max-width: 12rem; max-height: 16rem">
					
						<img class="categories img-responsive mx-auto d-block" src="img/salad1.jpg" alt="Avatar" width= "150" height="150">
					<a href="viewindex.php?id=1" class="food">ျမန္မာ အစားအစာ</a>
				</div>
   </div>
   <div class="col">
      <div class="card text-center" style="max-width: 12rem; max-height: 16rem">
					
						<img class="categories img-responsive mx-auto d-block" src="img/bao3.jpg" alt="Avatar" width= "150" height="150">
					<a href="viewindex.php?id=3" class="food">တရုတ္ အစားအစာ</a>
				</div>
   </div>
   <div class="col">
      <div class="card text-center"  style="max-width: 12rem; max-height: 16rem">
					
						<img class="categories img-responsive mx-auto d-block" src="img/sushi1.jpeg" alt="Avatar" width= "150" height="150">
					<a href="viewindex.php?id=5" class="food">ဂ်ပန္ အစားအစာ</a>
				</div>
   </div>
   <div class="col">
      <div class="card text-center"  style="max-width: 12rem; max-height: 16rem">
					
						<img class="categories img-responsive mx-auto d-block" src="img/korea7.jpg" alt="Avatar" width= "150" height="150">
					<a href="viewindex.php?id=2" class="food">ကုိးရီးယား အစားအစာ</a>
				</div>
   </div>
   <div class="col">
     <div class="card text-center"  style="max-width: 12rem; max-height: 16rem">
					
						<img class="categories img-responsive mx-auto d-block" src="img/thai4.jpeg" alt="Avatar" width= "150" height="150">
					<a href="viewindex.php?id=4" class="food">ထိုင္း အစားအစာ</a>
				</div>
   </div>
</div>
</div>
	
	
	</div>
  <div class="container">
    <div class="row"></div>
  </div>
<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

      <!-- Grid row-->
      <div class="row text-center d-flex justify-content-center pt-5 mb-1">

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h5 class="text-uppercase ">
            <a href="aboutUs.html">About us</a>
          </h5>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h5 class="text-uppercase">
            <a href="contact.html">Contact Us</a>
          </h5>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h5 class="text-uppercase">
            <a href="privacy.html">Privacy and Policy</a>
          </h5>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 mb-3">
          <h5 class="text-uppercase">
            <a href="terms&con.html">Terms and Conditions</a>
          </h5>
        </div>
        <!-- Grid column -->

      
      

      </div>
      <!-- Grid row-->
     

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="http://chatkyasoh.xyz/"> chatkyasoh.xyz</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->


</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
