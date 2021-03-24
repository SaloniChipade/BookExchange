<?php
$msg="";
$css_class="";

$server="localhost";
        $username="root";
        $password="";
        $dbname="book";
         

        $con = new mysqli($server , $username , $password ,$dbname);

        if($con->connect_error){
            die("Connection to this database failed due to".
            $con->connect_error());
        }  

        if(isset($_POST['save-user'])){
    //echo "hi";
    //echo "<pre>",print_r($_post),"</pre>";
    //echo "<pre>",print_r($_FILES),"</pre>";
    //echo "<pre>",print_r($_FILES['profileImage']),"</pre>";
    echo "<pre>",print_r($_FILES['profileImage']['name']),"</pre>";
    $bio=$_POST['bio'];
    $username_u=$_POST['username_u'];
    $profileImageName=time().'_' .$_FILES['profileImage']['name'];
    $target='images/' . $profileImageName;
    if(move_uploaded_file($_FILES['profileImage']['tmp_name'],$target)){
        $sql="UPDATE `book` SET `profile_image` = '$profileImageName', `bio` = '$bio' WHERE `book`.`username_1` = '$username_u'";
        if (mysqli_query($con, $sql)) {
            
            $css_class="alert alert-success alert-dismissible";
            $msg="Image uploaded and saved to database ";
           
        } 
        
    }
    else {
        $msg="Failed to upload";
        $css_class="alert-denger";
        
    }
    
}
?>