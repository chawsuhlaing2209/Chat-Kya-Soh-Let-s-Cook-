<?php include ('login/server.php');



$db->set_charset("utf8");
$_SESSION['id'] = $_GET['id'];
$id=$_GET['id'];
//echo "user_$id";


$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

	// Ignores notices and reports all other kinds... and warnings

	error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
	 }
$recipe_id =$_GET['id'];
$sqli = "SELECT * FROM comments WHERE recipe_id='$recipe_id'";
$result = mysqli_query($db, $sqli);
?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Chat Kya Soh</title>
	<link rel="icon" href="img/colorful1.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="homepage/food.css">
</head>

<body>
	<div class="container">
		<img src="img/colorful101.png" class="img-responsive"  width= "100" height="100">  
		<div class="row">
			<form>
			

				<div class="form-group">							
					<img src="food_images/<?php
					$_SESSION['id'] = $_GET['id'];

					if(isset($_GET['id']) && $_GET['id'] !== ''){
							
							$id=$_GET['id'];
							$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

							while ($row = mysqli_fetch_array($results)){
											
										echo $row['image'];
								}
							}else {
					echo "failed";
					}
					
					?>" class=" img-responsive mx-auto d-block" alt="Responsive image" width= "300" height="300" id="image">								
				</div>

				
				<!--Posted by-->
				<div class="form-group" style="text-align: center;"> <img src="img/post.png" width="50" height="50">
					<label for="exampleFormControlSelect1">Posted By: <?php
						$_SESSION['id'] = $_GET['id'];

						if(isset($_GET['id']) && $_GET['id'] !== ''){
						
						$id=$_GET['id'];
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

						while ($row = mysqli_fetch_array($results)){
										
									
									$uid=$row['user_id'];
									
							}
							$sql=mysqli_query($db,"SELECT * FROM users WHERE id='$uid'");
						while ($row1=mysqli_fetch_array($sql)){
						?>
                        <a href="login/userprofile_view.php?id=<?php echo $row1['id'];?>" style="color: red;"> <?php echo $row1['username']?></a>            
 
                        <?php
									
							}
						}
						else {
						echo "failed";
						}
						?>
						
				</label>
					
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


			<!--Name-->
				<div class="form-group">
					<label for="exampleFormControlInput1">Name</label>
					<div class="textbox">
						<?php
						$_SESSION['id'] = $_GET['id'];

						if(isset($_GET['id']) && $_GET['id'] !== ''){
								
								$id=$_GET['id'];
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

								while ($row = mysqli_fetch_array($results)){
												
											echo $row['name'];
									}
								}else {
						echo "failed";
						}
						?>
					</div>
				</div>

			<!--preparation time-->
				<div class="form-group">
					<label for="exampleFormControlSelect1">Preparation Time</label>
					<div class="textbox">
						<?php
						$_SESSION['id'] = $_GET['id'];

						if(isset($_GET['id']) && $_GET['id'] !== ''){
								
								$id=$_GET['id'];
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

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
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

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
					<label for="exampleFormControlSelect1">People</label>
					<div class="textbox">
						<?php
						$_SESSION['id'] = $_GET['id'];

						if(isset($_GET['id']) && $_GET['id'] !== ''){
						
						$id=$_GET['id'];
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

						while ($row = mysqli_fetch_array($results)){
										
									echo $row['people'];
							}
						}
						else {
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
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

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
								$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

						while ($row = mysqli_fetch_array($results)){
										
									echo $row['description'];
							}
						}
						else {
						echo "failed";
						}
						?>
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
    <form action="add.php?recipe_id=<?php echo $id; ?>" method="POST">
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