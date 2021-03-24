<?php include'add_book_db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="image.css">
    <title>Add Book</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col4 offset-md-4 form-div">
            <form action="add_book.php" method="post" enctype="multipart/form-data">
            <h3 class="form-group text-centre ">Add Book</h3>
             <?php if(!empty($msg)):?>
             <div class="alert<?php echo $css_class;?>">
             <?php echo $msg;?>
             </div>
             <?php endif;?>

            <div class="form-group text-center">
            <img src="image_placeholder.png" onclick="triggerClick()" id="bookDisplay "><br>
            <label for="bookImage">Old Book Photo</label>
            <input type="file" name="bookImage" onchange="displayImage(this)" id="bookImage" style="display:none;">
            </div>
            <div class="form-group">
            <label for="bio">Username</label>
            <textarea name="username_u" id="username_u"  class="form-control" required></textarea>
            </div>
            <div class="form-group">
            <label for="bio">Your Phone Number</label>
            <textarea name="phone" id="phone"  class="form-control" required></textarea>
            </div>
            
            <div class="form-group">
            <label for="bio">Description</label>
            <textarea name="des" id="des"  class="form-control" required></textarea>
            </div>
            <select class="w3-select w3-border" name="book_type1"  >
            <option value="book_type1" disabled selected >Choose your book type</option>
            <option value="Children Books" name="book_type1">CHILDREN’S BOOKS</option>
            <option value="Science Fiction" name="book_type1">SCIENCE FICTION</option>
            <option value="Detective Stories" name="book_type1">DETECTIVE STORIES</option>
            <option value="Poetry" name="book_type1">POETRY</option>
            <option value="Romance" name="book_type1">ROMANCE</option>
            <option value="Other" name="book_type1">OTHER</option>
            </select>
            <hr>
            <div class="form-group">
            <button type="submit" name="save-user" class="btn btn-primary btn-block">Add Book To Your Profile</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <script src="scriptbook.js"></script>
</body>
</html>