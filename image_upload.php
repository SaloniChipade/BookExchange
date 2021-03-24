<?php include'processform.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="image.css">
    <title>Upload Image</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col4 offset-md-4 form-div">
            <form action="image_upload.php" method="post" enctype="multipart/form-data">
            <h3 class="text-centre">Upload Your Photo</h3>
             <?php if(!empty($msg)):?>
                <div class="alert alert-success alert-dismissible fade show">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
                
                <?php echo $msg;?>
             </div>
             <?php endif;?>

            <div class="form-group text-center">
            <img src="image_placeholder.png" onclick="triggerClick()" id="profileDisplay "><br>
            <label for="profileImage">PROFILE IMAGE</label>
            <input type="file" name="profileImage" onchange="displayImage(this)" id="profileImage" style="display:none;">
            </div>
            <div class="form-group">
            <label for="bio">Username</label>
            <textarea name="username_u" id="username_u"  class="form-control" required></textarea>
            </div>
            <div class="form-group">
            <label for="bio">bio</label>
            <textarea name="bio" id="bio"  class="form-control" required></textarea>
            </div>
            <div class="form-group">
            <button type="submit" name="save-user" class="btn btn-primary btn-block">save user</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <script src="scriptsprofile.js"></script>
</body>
</html>