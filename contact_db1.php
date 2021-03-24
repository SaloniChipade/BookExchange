<?php
!

    $insert=false;
    //collect all errors in array 
    $errors = array(); 
    //defininig variables
   
    $first="";
    $last="";
    $cemail="";
    $phone="";
    $message="";
    

 //contactus 
    if(isset($_POST['send'])){
    
        $server="localhost";
        $username="root";
        $password="";
        $dbname="book";
        

        $con = new mysqli($server , $username , $password ,$dbname);

        if($con->connect_error){
            die("Connection to this database failed due to".
            $con->connect_error());
        }
        else{
            //echo "Success ";
            $first = $_POST['first'];
            $last = $_POST['last'];
            $cemail = $_POST['cemail'];
            $phone = $_POST['phone'];
            $messag = $_POST['message'];
            //echo "1";
               //        check for error
            //if(empty($first)){array_push($errors,"First name is required");}
            //if(empty($last)){array_push($errors,"Last name is required");}
            //if(empty($cemail)){array_push($errors,"Emial is required");}
            //if(empty($phone)){array_push($errors,"Phone number is required");}
            //if(empty($message)){array_push($errors,"Message is required");}
            //echo "2";
  
         //create connection
            if(count($errors) == 0){
                $sql="INSERT INTO `contactus` (`first`, `last`, `cemail`, `phone`, `message`) 
                  VALUES ('$first', '$last', '$cemail', '$phone', '$messag')";
                  //check connection
                if($con->query($sql)===TRUE){
                        $insert=true;
                        $a=1;
                    
                        
                        //echo "record added successfully."; 
                          
                }
                else{
                        echo "error:$sql <br> $con->error";
                }
              
            }
            else{
                echo "error";
            }
        }
    }   
    //echo "Success connecting to the db";
    //$first = $_POST['first'];
    //$last = $_POST['last'];
    //$cemail = $_POST['cemail'];
    //$phone = $_POST['phone'];
    //$messag = $_POST['message'];
    //check for error
    //if(empty($first)){array_push($errors,"First name is required");}
    //if(empty($last)){array_push($errors,"Last name is required");}
    //if(empty($cemail)){array_push($errors,"Emial is required");}
    //if(empty($phone)){array_push($errors,"Phone number is required");}
    //if(empty($message)){array_push($errors,"Message is required");}
  
    //   //create connection
    //  if(count($errors) == 0){
    //      $sql="INSERT INTO `contactus` (`first`, `last`, `cemail`, `phone`, `message`) 
    //        VALUES ('$first', '$last', '$cemail', '$phone', '$messag')";
    //        //check connection
    //        if($con->query($sql)===TRUE)
    //        {
    //            $insert=true;
    //            echo "record added successfully.";    
    //        }
    //        else{
    //            echo "error:$sql <br> $con->error";
    //        }
    //    }
        
    $con->close();
   
                
?>
<script>
    if ($insert=true) {
        alert("Your message has been sent successfully");
         
  }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Submited</title>
</head>
<body>
<div class="w3-container">
<div class="w3-display-container w3-text-white">
<img class="bg" src="13.jpeg" class="w3-round-xxlarge" alt="BOOK WEBSITE" width="1550" height="760" style="padding: unset;"  >
<p> <a class="w3-display-middle w3-container" href="profile.php" style="font-size: 25px; ">BACK TO HOME?</a></p>


</div>

</div>
</body>
</html>
