<?php include ('login/server.php');


$db->set_charset("utf8");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chat Kya Soh</title>
	<link rel="icon" href="img/colorful1.png" type="image/png">
	</head>
	<body>

<?php $results = mysqli_query($db, "SELECT * FROM categories");?>

<?php 
 if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
			 }



while ($row = mysqli_fetch_array($results)) {?>		

		 
		<a href="viewindex.php?id=<?php echo $row['id'];?>"><?php echo $row['name']?></a>
		
		
		<?php }?>

</body>