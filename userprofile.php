<?php include('upload.php')?>
<?php 
        if(!isset($_SESSION)){
            session_start();
        }
                 if (!isset($_SESSION['username'])) {
                    header("Location: index.php");
                    exit();
                }
        $username= $_SESSION['username'];
        $sql=mysqli_query($db,"SELECT id FROM users WHERE username='$username'");
        while($row = mysqli_fetch_array($sql)){
            $user_id = $row['id'];
        
        }
        if(version_compare(PHP_VERSION,'7,2,0','>=')){
            error_reporting(E_ALL^E_NOTICE^E_WARNING);
        }
        $sql="SELECT * FROM users WHERE id = '$user_id'";
        $db->set_charset("utf8");
        $result=mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result);    
        $_SESSION['user_id'] = $user_id;
        
        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
             }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="../img/colorful1.png" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="userprofile.css">

    <title >Chat Kya Soh</title>
    <link rel="icon" href="../img/colorful1.png" type="image/png">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light " id="nav">
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

    <div class="container" id="container">
    <div class="row" >
        <div class="col d-flex justify-content-center"> 
            <img src="profile_images/<?php echo $row['image'];?>" id="imageDisplay" class="img img-responsive mx-auto d-block" alt="Responsive image" width= "250" height="250" />

        </div>
        <div class="col d-flex justify-content-center" > 
            <div id="userinfo" class="float-sm-right mx-auto align-middle mt-3 " style="text-align: center;">
                <h1 class="d-inline-block">
                    <?php
                    echo  $username;
                    ?>  
                </h1>
               
                <p style="margin: 10px 0; font-size: 24px; font-weight: 500;"><?php echo $row['description']; ?></p>
                 <div class="col d-flex justify-content-center">
                  <form action="userprofile.php" method="post" enctype="multipart/form-data" id="form" >
               <h5><img src="../img/edit3.png" width="20">Edit Profile</h5>
                    <input type="file" name="image"  accept=".jpg,.jpeg,.png" style="width:220px;  background-color: rgba(255,255,255,0.5);">
                   
                    <input type="text" name="description" style="width:220px; border: 1px solid darkgrey;"/>
                    <input type="submit" alt="Upload" class="btn btn-primary btn-block" name="submit" style="width: 220px;  padding: 3px;  background-color: #16A085; border: #16A085;"/>

            </form>
            </div>
        </div>
        </div>
             
        </div>
   
        <div style="clear:both;" class="col">

            <div class="row">
                <div class="col">
            <nav class="nav nav-pills nav-justified" id="navbar">
              <a class="nav-item nav-link" id="nav-item" href="share.php">My Post</a>
              <a class="nav-item nav-link" id="nav-item" href="create.php">Create Recipe</a>
              <a class="nav-item nav-link" id="nav-item" href="../userhome.php">Recipes</a>
              <a class="nav-item nav-link" id="nav-item" href="../userfeeds.php">Recifeed</a>
            </nav>
            </div>
            </div>

        <div class="container">
                <h3 style="height:100px; padding-top: 50px;">Most viewed recipes</h3>        
        <div class="row">

        <?php $results = mysqli_query($db, "SELECT * FROM recipes ORDER BY view DESC LIMIT 4");?>

        <?php 
        if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

            // Ignores notices and reports all other kinds... and warnings

            error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
        }

        //display title in card

        while ($row = mysqli_fetch_array($results)) { ?>


        <div class="col-lg-3 col-sm-4 d-flex justify-content-center" id="column">
        <div class="card text-center mb-3" style="max-width: 14rem;">
            
                <img id="image" class="card-img img-responsive mx-auto d-block rounded-circle" src="../food_images/<?php echo $row['image']?>" alt="Avatar" width= "160" height="160">
           
            <div class="card-body">
            <p class="card-text">
                <a href="toprecipe.php?id=<?php echo $row['id'];  ?>" id="recipe">

                <?php 
                echo $row['name']?>
               
                    
                </a>
             </p>
             <img src="../img/view1.png" width="30" height="30">

                <?php 
                 echo $row['view']. " views";

                ?>
        
      
 
        </div>        
        </div>
        </div>

         <?php }?>
        </div>
    </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-post" role="tabpanel" aria-labelledby="nav-home-tab"></div>
                <div class="tab-pane fade" id="nav-followers" role="tabpanel" aria-labelledby="nav-profile-tab"></div>
                <div class="tab-pane fade" id="nav-followings" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
                <div class="tab-pane fade" id="nav-favorite" role="tabpanel" aria-labelledby="nav-contact-tab"></div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>                
