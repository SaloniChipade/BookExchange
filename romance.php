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
              placeholder="Search"
              aria-label="Search">
            <button class="btn btn-outline-success" type="submit" name="search_b">Search</button>
        </form>
    </div>
  </nav>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
    <img src="001.png" alt="logo" style="width:40px;"> 
    <?php
        echo "Romance";
    ?>
  </a>
 
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
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="d6.jpeg" alt="Los Angeles" width="1100" height="400" style="opacity: 1;">
      <div class="carousel-caption">
      </div>   
    </div>

  
  
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
        $sql="SELECT *  FROM book WHERE book_type = 'ROMANCE' or 'Romance'" ;
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
<p> </p>
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

