<?php include('server.php');
	if(!isset($_SESSION)){
		 	session_start();
		}
	if (!isset($_SESSION['username'])) {
				header("Location: index.php");
				exit();
		}
		
	$username =$_SESSION['username'];
	$db->set_charset("utf8");
					      
	$sql=mysqli_query($db,"SELECT id FROM users WHERE username='$username'");
				
	while ($row = mysqli_fetch_array($sql)) {
	$user_id=$row['id'];
	
	 } 

	$_SESSION['user_id'] = $user_id;
	
	  if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
			 }

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM recipes WHERE id=$id");



       if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
			 }


		if (count($record) != 0 ) {
			$n = mysqli_fetch_array($record);
			$image = $n['image'];
			$name = $n['name'];
			$id = $n ['id'];
			$user_id=$n['user_id'];
			$ingredent=$n['ingredent'];
			$description=$n['description'];
			$preparation_time=$n['preparation_time'];
			$cooking_time=$n['cooking_time'];
			$people=$n['people'];


		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta set charset="utf-8">    

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 

	<title>Chat Kya Soh</title>
	<link rel="icon" href="../img/colorful1.png" type="image/png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light " id="navbar">
  	<a class="navbar-brand" href="index.php"><img src="../img/colorful101.png " alt="Image" class=" img-fluid mx-auto d-block" width= "50" height="50"></a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto NAVBAR-RIGHT">
      
      <li class="nav-item navbar-right ml-auto">
        <a class="nav-link" id="color" href="logout.php"><i class="fa fa-user"></i>  Log Out</a>
      </li>
      <li class="nav-item navbar-right ml-auto">
        <a class="nav-link" id="color" href="../feedback/feedback.html"><i class="fa fa-comments"></i> Feedback</a>
      </li>
      </ul>  
  </div>
</nav>

	<div class="container">
		<div class="row">
		
		<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
		<?php endif ?>

		<div class="container" id="form" >

	<?php if($update==true):?>
	<form method="post" action="update.php" enctype="multipart/form-data">
	
	
		<div>
			<input id="textbox" type="hidden" name="id" value="<?php echo $id; ?>">
	<img src="../food_images/
	<?php 
	$results = mysqli_query($db, "SELECT * FROM recipes WHERE user_id!=0 AND id='$id'");

		    	while ($row = mysqli_fetch_array($results)){
								
							echo $row['image'];
					
				}
		
		?>" class="img-responsive mx-auto d-block rounded-circle" alt="Upload Image" width= "200" height="200" id="image">
    				
			<label for="image">Select images: </label>
			<input type="file" name="image" accept=".jpg,.jpeg,.png">
		</div>
		
		<div class="input-group">
			<label>Name</label>
			<input name="name" value="<?php echo $name?>">
		</div>

		<div class="input-group">
			<label>Preparation Time</label>
			<input name="preparation_time" value="<?php echo $preparation_time?>">
		</div>

		<div class="input-group">
			<label>Cooking Time</label>
			<input name="cooking_time" value="<?php echo $cooking_time?>">
		</div>

		<div class="input-group">
			<label>People</label>
			<input name="people" value="<?php echo $people?>">
		</div>

		<div class="input-group">
			<label>Ingredients</label>
			<textarea name="ingredent" rows="3"><?php echo $ingredent?></textarea>
		</div>

		<div class="input-group">
			<label>Description</label>
			<textarea  name="description"  rows="4" value=""><?php echo $description?></textarea>
		</div>


		<div class="input-group">
		<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		</div>

	</form>


		<?php else: ?>

		<form method="post" action="insert.php" enctype="multipart/form-data">

		<div>

			<label for="image">Select images: </label>
			<input type="file" name="image" accept=".jpg,.jpeg,.png">
		</div>	
			
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="">
		</div>

		<div class="input-group">
			<label>Preparation Time</label>
			<input type="text" name="preparation_time" value="">
		</div>

		<div class="input-group">
			<label>Cooking Time</label>
			<input type="text" name="cooking_time" value="">
		</div>

		<div class="input-group">

			<label>People</label>
			<input type="text" name="people" value="">
		</div>

		<div class="input-group">
			<label>ingridient</label>
			<textarea name="ingredent" rows="3" value=""></textarea>
		</div>

		<div class="input-group">
			<label>Description</label>
			<textarea name="description"  rows="4" value=""></textarea>
		</div>

			<button class="btn" type="submit" name="save" >Save</button>
			<?php endif ?>
		
	</form>
</div>

</div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html> 