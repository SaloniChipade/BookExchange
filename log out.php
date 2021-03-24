

<?php

$userinfo = "";
  
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
         $userinfo = $_POST['userinfo'];

            $sql = "DELETE FROM `book` WHERE username_1='$userinfo'";

            if ($con->query($sql)===TRUE) {

                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($con);
            }
    }

    mysqli_close($con);
             
            
   
                
?>

