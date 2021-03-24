<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fortress Of Gratitude</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="profile.css">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="head" >Fortress Of Gratitude</a>
        <form action="search.php"class="d-flex" method="post">
          <input
              class="form-control me-2"
              type="search"
              name="search_a"
              placeholder="Search "
              aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="search_b">Search</button>
        </form>
    </div>
  </nav>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="001.png" alt="logo" style="width:40px;"> 
    <?php
        echo "WELCOME USER";
    ?>
  </a>
  
  <!-- Links -->
  <ul class="navbar-nav">
  <li class="nav-item">
      <a class="nav-link" href="myaccoutn.php"> MY ACCOUNT</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="children.php">CHILDREN’S BOOKS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="science.php">SCIENCE FICTION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="detective.php">DETECTIVE STORIES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="poetry.php">POETRY</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="romance.php">ROMANCE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="other.php">OTHER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="c.html">CONTACT US</a>
    </li>
    
  </ul>
</nav>
</body>
</html>

<!-- crousel-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    
  }
  </style>
</head>
<body>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="d6.jpeg" alt="Los Angeles" width="1100" height="400" style="opacity: 1;">
      <div class="carousel-caption"></div>   
    </div>
    <div class="carousel-item">
      <img src="The-Jungle-Book-HD-Wallpapers-Backgrounds-Wallpaper-1365x768.jpg" alt="Chicago" width="1100" height="400">
      <div class="carousel-caption">
  
        <p>Click on below button to download ebooks</p>
<!DOCTYPE html>
<html>
<head>
<style>
.button {
  display: inline-block;
  border-radius: 1px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 13px;
  padding: 10px;
  width: 150px;
  height:40px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
  <form action="download.php" method="post">
  <button class="button" style="vertical-align:middle"><span>Download </span></button>
</form>
</body>
</html>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="large.jpg" alt="New York" width="1100" height="400">
      <div class="carousel-caption">
        <h3>Thank You For Using This Website</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>



<?php
$server="localhost";
        $username="root";
        $password="";
        $dbname="book";
        // Connect to the database
        $con = new mysqli("localhost","root","","book");
        // Make sure we connected successfully
        if(! $con)
        {
            die('Connection Failed'.mysql_error());
        }
        else{
            //echo "hi";
        }

        
            //mysql_select_db($dbname,$con);
        $sql="SELECT *  FROM book " ;
        $result =$con->query($sql);
        $number_rows = mysqli_num_rows($result);
        if($number_rows>0){
            while($row=$result->fetch_assoc()){
              if ($row["profile_image"]!=0  and $row["book_image"]!=0) {?>
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <div class="w3-third">
    <div class="w3-card">
      
    <?php 
    if ($row["profile_image"]!=0) {?>
    
						<img src="images/<?php echo $row["profile_image"]; ?>" class="img-responsive" width="100" height="100"/><br />
					
          <?php
            }?>
      <div class="w3-container">
        <p>Userame: <?php echo $row["username_1"]; ?></p>	
        <p>City: <?php echo $row["city"]; ?></p>
					<p>Book Type: <?php echo $row["book_type"]; ?></p>
					
          <?php if ($row["book_image"]!=0) {?>
                        <img src="bookimages/<?php echo $row["book_image"]; ?>" class="img-responsive" width="350" height="350"  /><br />
					<?php }
					else{
						echo "Photo Of Book Not Uploaded";
          }
          ?>
          <style>
.hide {
  display: none;
}
    
.myDIV:hover + .hide {
  display: block;
  color: black;
}
</style>
</head>
<body>

<div class="myDIV">Proceed >></div>
<div class="hide">
  <p>Name: <?php echo $row["name"]; ?></p>
        <p>Email: <?php echo $row["email"]; ?></p>
        <p>Phone Number: <?php echo $row["phone"]; ?></p>
        <p>City: <?php echo $row["city"]; ?></p>
					<p>Book Type: <?php echo $row["book_type"]; ?></p>
					<p>Description: <?php echo $row["description"]; ?></p>

</div>
           
<br>

      </div>
    </div>
  </div>
</div>
</body>
</html>

<?php        }
    }
  }
$con->close();
     
?>




