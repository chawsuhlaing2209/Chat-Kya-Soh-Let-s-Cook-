<?php 
	session_start();

	// variable declaration
	$username = "";
	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'kddi');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, password) 
					  VALUES('$username', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			
			header('location: userprofile.php');
			exit();
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
$sql_username_validate="SELECT * FROM users WHERE username='$username' AND password='$password'";
$user_validate_result=mysqli_query($db,$sql_username_validate);
$count=mysqli_num_rows($user_validate_result);
echo $count;
if($count==1)
{
  $_SESSION['username'] = $username;
 
  header ('Location:userprofile.php');
}
else
{
//header ('Location:login.php');
}


		/*
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) > 0) {
				$_SESSION['username'] = $username;
				
				header('location: userprofile.php');
				exit();
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		} */
	}

?>