
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>See your Profile</title>
</head>
<body>
<div class="w3-container" }>   
<img src="12.jpeg" alt="Lights" width="1550" height="1200">
<div class="w3-display-topmiddle w3-container w3-text-white" style="height:100">
<?php
    if(isset($_POST['login_user1'])){
        $username_2 = $_POST['username_2'];
        $password_2 = $_POST['password_2'];
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
        $sql="SELECT *  FROM book WHERE username_1 = '$username_2' and password_1 = '$password_2'" ;
        $result =$con->query($sql);
        $number_rows = mysqli_num_rows($result);
        if($number_rows>0){
            while($row=$result->fetch_assoc()){
                
                if($row["username_1"]==$username_2 && $row["password_1"]==$password_2){
                    //header("location:http://localhost/cwsa/info.php");<img src="12.jpeg" alt="Lights" width="1550" height="1000">
        
                    //echo"You are a validated user. '$username_2'";
					?>
					
					<div class="w3-card" style="width:100% height=80%">
					<h1><p>Your Profile:</p></h1>
    				<?php if ($row["profile_image"]!=0) {?>
						<img src="images/<?php echo $row["profile_image"]; ?>" class="img-responsive" width="372" height="300"/><br />
					<?php }
					else{
						echo "No Profile Photo Uploaded";
					}?>

    					<div class="w3-container">
						<p>Userame: <?php echo $row["username_1"]; ?></p>
						<p>Name: <?php echo $row["name"]; ?></p>
				    	<p>Email: <?php echo $row["email"]; ?></p>
                        <p>City: <?php echo $row["city"]; 
                        $citys=$row["city"]?></p>
				    	<p>Gender: <?php echo $row["gender"]; ?></p>
                    	<p>Bio: <?php echo $row["bio"]; ?></p>
      					<p>Phone Number: <?php echo $row["phone"]; ?></p>
   					</div>

  					<h3><p>Book You Posted:</p></h3>
  					<div class="w3-card" style="width:100%">
  					<?php if ($row["book_image"]!=0) {?>
                        <img src="bookimages/<?php echo $row["book_image"]; ?>" class="img-responsive" width="372" height="300"  /><br />
					<?php }
					else{
						echo "Photo Of Book Not Uploaded";
					}?>
    				<div class="w3-container">	
                    <p>Book Type: <?php echo $row["book_type"]; 
                    $books=$row["book_type"]?></p>
					<p>Description: <?php echo $row["description"]; ?></p>
    				</div>
                <?php

				}
			}
        
        }
    }
    $con->close();  
?>
</div>
</div>
</body>
</html>

