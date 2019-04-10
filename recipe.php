<?php include ('login/server.php');
$db->set_charset("utf8");
$_SESSION['id'] = $_GET['id'];
$id=$_GET['id'];

$results = mysqli_query($db, "SELECT * FROM recipes");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Kya Soh</title>
	<meta property="og:url"           content="http://chatkyasoh.xyz/" />
  	<meta property="og:type"          content="website" />
  	<meta property="og:title"         content="Chat Kya Soh" />
  	<meta property="og:description"   content="Let's Cook" />
  	<meta property="og:image"         content="http://chatkyasoh.xyz/img/colorful101.png" />
	<link rel="icon" href="img/colorful101.png" type="image/png">
	<link rel="icon" href="img/colorful101.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="homepage/food.css">
</head>

<body>
	
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
<div class="container">
		<div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  function buildURL(item)
{
    item.href=js.src+window.location.href;
    return true;
}
  </script>
		<div class="row">
		<form>
		

	 	<div class="form-group">
	 		
    	
    		<img src="food_images/<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['image'];
					}
				}else {
		  echo "failed";
		}
		?>" class=" img-responsive mx-auto d-block" alt="Responsive image" width= "300" height="300" id="image">
    			
		
    	</div>
				
    	<div class="form-group">
			
		<div class="fb-share-button" onclick="return buildURL(this)"
			data-href="">
		</div>
	</div>
								<!--view-->
			  	<div class="form-group" style="text-align: center;"><img src="img/view1.png" width="30" height="30">
			    	<label for="exampleFormControlInput1" ">Views
			    	<?php
			    	$_SESSION['id'] = $_GET['id'];

					if(isset($_GET['id']) && $_GET['id'] !== ''){
							
							$id=$_GET['id'];
							$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");
							mysqli_query($db,"UPDATE recipes SET view=view+1 WHERE id='$id'");
							mysqli_fetch_row(mysqli_query($db,"SELECT view FROM recipes"));

					    	while ($row = mysqli_fetch_array($results)){
											
									
									echo $row['view'];
								}
							}else {
					  echo "failed";
					}
					?>
				</label>
			    	
			</div>

		
 	<div class="form-group">
    	<label for="exampleFormControlInput1">ဟင္းအမည္</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['name'];
					}
				}else {
		  echo "failed";
		}
		?>
	</div>
  	</div>

  	

  
 	<div class="form-group">
    	<label for="exampleFormControlSelect1">ျပင္ဆင္ရန္ၾကာခ်ိန္</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['preparation_time'];
					}
				}
				else {
		  echo "failed";
		}
		?>
	</div>
    </div>

    <div class="form-group">
    	<label for="exampleFormControlSelect1">ခ်က္ျပဳတ္ရန္ၾကာခ်ိန္</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['cooking_time'];
					}
				}
				else {
		  echo "failed";
		}
		?>
	</div>
    </div>

     	<div class="form-group">
    	<label for="exampleFormControlInput1">လူအေရအတြက္</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['people'];
					}
				}else {
		  echo "failed";
		}
		?>
	</div>
  	</div>

 	<div class="form-group">
    	<label for="exampleFormControlSelect1">Ingredients</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
				
				$id=$_GET['id'];
				$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['ingredent'];
					}
				}
				else {
		  echo "failed";
		}
		?>
	</div>
</div>


	<div class="form-group">
    	<label for="exampleFormControlSelect1">ဟင္းခ်က္ပံုအဆင့္ဆင့္</label>
    	<div class="textbox">
    	<?php
    	$_SESSION['id'] = $_GET['id'];

		if(isset($_GET['id']) && $_GET['id'] !== ''){
		
		$id=$_GET['id'];
		$results = mysqli_query($db, "SELECT * FROM recipes WHERE id='$id'");

    	while ($row = mysqli_fetch_array($results)){
						
					echo $row['description'];
			}
		}
		else {
  		echo "failed";
		}
		?>
    </div>
</div>
	
	</form>

	</div>
	</div>

</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</html>