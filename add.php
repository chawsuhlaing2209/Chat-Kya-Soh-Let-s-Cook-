<?php
include('login/server.php');
//DATA 
$description = $_POST['description'];
//ASSIGN THIS FROM SESSION
$user_id = $_SESSION['user_id'];
//ASSIGN THE RECIPE
$recipe_id = $_GET['recipe_id'];
//DATE TIME
$date = date('Y-m-d  h:i:sa');
 
$sql = "INSERT INTO comments (description, user_id, recipe_id,created_at)
VALUES ('$description', '$user_id', '$recipe_id','$date')";

if ($db->query($sql) === true) {
    echo "Comment added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

$db->close();

//This  wil redirect
 header ('Location: user_feed.php?id='.$recipe_id);
?>