<?php include ('login/server.php');



$db->set_charset("utf8");
$_SESSION['id'] = $_GET['id'];
$id=$_GET['id'];

$results = mysqli_query($db, "SELECT * FROM recipes");
$recipe_id =$_GET['id'];
$sqli = "SELECT * FROM comments WHERE recipe_id='$recipe_id'";
$result = mysqli_query($db, $sqli);
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
        <a class="nav-link" id="color" href="login/logout.php"><i class="fa fa-user"></i>  Log Out</a>
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
		?>" class=" img-responsive mx-auto d-block roundede-circle" alt="Unavailable" width= "300" height="300" id="image">
    			
		
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
    	<label for="exampleFormControlInput1">Name</label>
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
    	<label for="exampleFormControlSelect1">Preparation Time</label>
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
    	<label for="exampleFormControlSelect1">Cooking Time</label>
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
    	<label for="exampleFormControlInput1">People</label>
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
    	<label for="exampleFormControlSelect1">Description</label>
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
  	<div class="container mx-auto">
<!--     <h6 class="mt-4 center-align">Recipe and description etc... goes here</h6>
 -->
<!--Comment display-->
<!--Comment display-->
<!--Comment display-->
<ul class="list-group">
<?php while($row = mysqli_fetch_assoc($result)) { ?>
<?php 
//GETTING USER NAME FROM USER TABLE
$user_id =$row['user_id'];
$query = "SELECT username FROM users WHERE id='$user_id'";
$name_result = mysqli_query($db,$query);
mysqli_data_seek($name_result, 1);
$name = mysqli_fetch_assoc($name_result);
?>
  <li class="list-group-item"><?php echo $name['username']; ?> - "<?php echo $row['description']; ?>" (<?php echo $row['created_at']; ?>)</li>
<?php } ?>
</ul>
<!--Comment display-->
<!--Comment display-->
<!--Comment display-->

    <!--COMMENT FORM INPUT-->
    <!--COMMENT FORM INPUT-->
    <!--COMMENT FORM INPUT-->

    <!-- RECEPIE_ID KO GET METHOD NAE HTAE YAN -->
    <form action="add1.php?recipe_id=<?php echo $id; ?>" method="POST">
    	<div class="input-group mt-3">
  		<input name ="description" type="text" class="form-control" placeholder="Add a comment" aria-label="Add a comment" aria-describedby="basic-addon2">
  		<div class="input-group-append">
    		<button class="btn btn-outline-secondary" type="submit">Add</button>
  		</div>
		</div>
	</form>
    <!--COMMENT FORM INPUT-->
    <!--COMMENT FORM INPUT-->
    <!--COMMENT FORM INPUT-->
	</div>
	
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
</html>