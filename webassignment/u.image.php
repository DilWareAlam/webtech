<?php
include('connect.php');
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>

<!DOCTYPE html>
<html>
<head>
	<title>
  Images
	</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>
	<li><a class="active" href="u.index.php">Home</a></li>
<!-- 	<li><a href="u.profile.php">Profile</a></li>  -->
  <li style="float: left;"><a href="u.profile.php">
    <b><?php
      if(isset($_SESSION['loggedid'])){
        $sql="SELECT * FROM users WHERE u_id='$_SESSION[loggedid]'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $a=$row['u_name'];
      echo $a;
      }else{
        echo "Name";
      }
    ?></b>
  </a></li>
	<li><a href="u.image.php">Images</a></li>
	<li><a href="u.logout.php">Log Out</a></li>
<!-- 	<li style="float: right;"><a href="#about">About</a></li> -->
</ul>



<div align="center" style="resize: none;">
    <form method="post" action="u.image.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <p>Select a photo from your computer. 
            <input type="file" name="image">
            </p><br>
            <textarea class="area" name="text" placeholder="Write here..." required></textarea><br>
            <input type="submit" value="Upload" name="upload">
        </form>
        </div>
        <div>
          <?php
              $msg = "";
              // if upload button is clicked
              if(isset($_POST['upload'])){
             // the path to store the upload image
              $target = "images/".basename($_FILES['image']['name']);
              //connect database
              //get all the data from the form
              $image = $_FILES['image']['name'];
              $text = $_POST['text'];
    
              $sql = "INSERT INTO image (image,text,u_id)"."VALUES ('$image','$text','$_SESSION[loggedid]')";
              mysqli_query($conn,$sql);
             //moving the uploaded file to the image folder
              if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                $msg = "image uploaded successfully";
              }else{
                $msg = "image not uploaded";
          }
      }

?>
        </div>

        <div class="propic" align="center">
    <?php
        if(isset($_SESSION['loggedid'])){
        $sql = "SELECT * FROM image WHERE u_id='$_SESSION[loggedid]'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            echo '<img src = "images/'.$row['image'].'">';
        }
      }else{
        echo "No Image";
      }
        ?>
  </div>

</body>
</html>