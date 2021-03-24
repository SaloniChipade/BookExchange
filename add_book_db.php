<?php
$msg="";
$css_class="";
$book_type="";


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
    echo "<pre>",print_r($_FILES['bookImage']['name']),"</pre>";
   
    $username_u=$_POST['username_u'];
    $phone=$_POST['phone'];
    $book_type=$_POST['book_type1'];
    $description=$_POST['des'];
    $bookImageName=time().'_' .$_FILES['bookImage']['name'];
    $target='bookImages/'. $bookImageName;
    //if ($sql="SELECT *  FROM book  WHERE `book`.`username_1` = '$username_u'"==true) {
    
        if(move_uploaded_file($_FILES['bookImage']['tmp_name'],$target)){
        $sql="UPDATE `book` SET `book_image`='$bookImageName', `phone` = '$phone',`book_type` = '$book_type', `description` = '$description' WHERE `book`.`username_1` = '$username_u'";
           if (mysqli_query($con, $sql)) {
            
            $css_class="alert alert-success alert-dismissible";
            $msg="Image uploaded and saved to database ";
           
           } 
        
           
            else {
            $msg="Failed to upload";
            $css_class="alert-denger";
        
             }
        }
    //}
    
}
?>