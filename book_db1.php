<?php

    $insert=false;
    //collect all errors in array 
    $errors = array(); 
    //defininig variables
    $username_1 = "";
    $name = "";
    $gender = "";
    $email = "";
    $city = "";
    $password_1 = "";
    $gender = "";
    $username_2 = "";
    $password_2 = "";
    if(isset($_POST['submit_1'])){
    
        $server="localhost";
        $username="root";
        $password="";
        $dbname="book";
         

        $con = new mysqli($server , $username , $password ,$dbname);

        if($con->connect_error){
            die("Connection to this database failed due to".
            $con->connect_error());
        }   
        //echo "Success connecting to the db";
        $username_1 = $_POST['username_1'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $password_1 = $_POST['password_1'];
        $gender = $_POST['gender'];
        //check for error
        if(empty($username_1)){array_push($errors,"Username is required");}
        if(empty($name)){array_push($errors,"Your same is required");}
        if(empty($email)){array_push($errors,"Emial is required");}
        if(empty($city)){array_push($errors,"City is required");}
        if(empty($password_1)){array_push($errors,"Password is required");}
        if(empty($gender)){array_push($errors,"Gender is required");}
        //to check current inputed username already exists or not
        $sql="SELECT *  FROM book WHERE username_1 = '$username_1'";
        $result =$con->query($sql);
        $number_rows = mysqli_num_rows($result);
        if($number_rows>0){
            while($row=$result->fetch_assoc()){
                if($row["username_1"]==$username_1){
                    header("location:http://localhost/cwsa/existsun.html");
                }
                    
            }    
        }
        else{
            //create connection
            if(count($errors) == 0){
                $sql="INSERT INTO `book` (`username_1`, `name`, `email`, `city`, `password_1`, `gender`)
                VALUES ('$username_1', '$name', '$email', '$city', '$password_1', '$gender')";
                //check connection
                if($con->query($sql)===TRUE)
                {
                    $insert=true;
                    header("location:http://localhost/cwsa/profile.php");
                    //echo "record added successfully.";    
                }
                else{
                    echo "error:$sql <br> $con->error";
                }
            }
            
        }
    
      
    }


    if(isset($_POST['login_user'])){
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
            // echo "hi";
        }//mysql_select_db($dbname,$con);
        $sql="SELECT *  FROM book WHERE username_1 = '$username_2' and password_1 = '$password_2'" ;
        $result =$con->query($sql);
        $number_rows = mysqli_num_rows($result);
        if($number_rows>0){
            while($row=$result->fetch_assoc()){
                
                if($row["username_1"]==$username_2 && $row["password_1"]==$password_2){
                    header("location:http://localhost/cwsa/profile.php");
        
                    //echo"You are a validated user. '$username_2'";
                        }
                else{
                    echo"Sorry, your credentials are not valid, try with correct username or Please try again."; 
                }
            }
        }
        else{
            header("location:http://localhost/cwsa/existsun.html");
        }
    }


    $con->close();
                
?>
