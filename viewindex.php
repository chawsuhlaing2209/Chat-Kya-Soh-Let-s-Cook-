<?php include ('login/server.php');


$db->set_charset("utf8");

$_SESSION['id'] = $_GET['id'];
$id=$_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat Kya Soh</title>
	<link rel="icon" href="img/colorful101.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="homepage/food1.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
  <a class="navbar-brand" href="index.php"><img src="img/colorful101.png " alt="Image" class=" img-fluid mx-auto d-block" width= "50" height="50"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto NAVBAR-RIGHT">
      
     
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="viewindex.php?id=1"><img src="img/food4.png" width="25"></i> ျမန္မာ အစားအစာ</a>
      </li>
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="viewindex.php?id=3"><img src="img/food4.png" width="25"> တရုတ္ အစားအစာ</a>
      </li>
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="viewindex.php?id=5"><img src="img/food4.png" width="25"> ဂ်ပန္ အစားအစာ</a>
      </li>
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="viewindex.php?id=2"><img src="img/food4.png" width="25"> ကုိးရီးယား အစားအစာ</a>
      </li>
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="viewindex.php?id=4"><img src="img/food4.png" width="25"> ထိုင္း အစားအစာ</a>
      </li>
       <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="login/login.php">
          <i class="fa fa-user" style="color:black;"></i>  Log In</a>
      </li>
      <li class="nav-item navbar-center ml-auto">
        <a class="nav-link" id="color" href="feedback/feedback.html"><i class="fa fa-comments" style="color:black;"></i> Feedback</a>
      </li>
      </ul>  
  </div>
</nav>
	<div class="container">
		<img class="img-responsive mx-auto d-block" id="logo" src="img/colorful101.png" alt="Avatar" width="350">
		<div class="row">

		<?php $results = mysqli_query($db, "SELECT r.id,r.name,r.image FROM recipes r LEFT JOIN category_recipe cr ON r.id=cr.recipe_id WHERE cr.category_id=$id");?>

		<?php 
 		if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
		}

		//display title in card

		while ($row = mysqli_fetch_array($results)) { ?>


   		<div class="col-lg-3 col-sm-4" id="column">
    	<div class="card text-center mb-3" style="max-width: 15rem;max-height: 20rem;">
    		
    			<img id="image" class="card-img img-responsive mx-auto d-block" src="food_images/<?php echo $row['image']?>" alt="Unavailable" width= "160" height="160">
    		
		<div class="card-body">
			<p class="card-text"><a href="recipe.php?id=<?php echo $row['id'];  ?>" id="recipe">

				<?php 
				echo $row['name'];

			 	?>
			 		
			 	</a>
			 	
			 </p>
			 <!--<div class="reaction">
			<a href="#"><i class="fa fa-heart" style="color:red;"></i> Favorite </a>
					</div>-->
		</div>
		
		</div>
</div>

		 
		<?php }?>
</div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>