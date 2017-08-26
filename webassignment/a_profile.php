<?php
include('connect.php');
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		<?php
      if(isset($_SESSION['loggedid'])){
        $sql="SELECT * FROM admin WHERE a_id='$_SESSION[loggedid]'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $a=$row['a_name'];
      echo $a;
      }else{
        echo "Name";
      }
      ?> Profile
	</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>
	<li><a>ADMIN</a></li>
	<li><a class="active" href="a_index.php">Home</a></li>
	<li><a href="a_profile.php">Profile</a></li> 
	<li><a href="a_image.php">Images</a></li>
	<li><a href="a_activity.php">Activity</a></li>
	<li><a href="a_logout.php">Log Out</a></li>
	<li style="float: right;"><a href="#about">About</a></li>
	<li style="float: right;"><a>
		<b><?php
      if(isset($_SESSION['loggedid'])){
        $sql="SELECT * FROM admin WHERE a_id='$_SESSION[loggedid]'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $a=$row['a_name'];
      echo $a;
      }else{
        echo "Name";
      }
		?></b>
	</a></li>
</ul>

<div align="center" margin="auto" style="font-size: 250%; margin-top: 50px;">
<?php
$sql = "SELECT * FROM admin WHERE a_id = '".$_SESSION['loggedid']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <strong>Name: </trong>" . $row["a_name"]. "<br> ";
        echo "<strong>Email: </strong>" . $row["a_email"]. "<br> ";
        echo "  <strong>Age: </strong>" . $row["a_age"]. "<br> ";
        echo "<strong>Address: </strong>" . $row["a_address"]. "<br> ";
        echo "<strong>Contact: </strong>" . $row["a_cont"]. "<br> ";
    }
  }
?>
<a href="a_edit.php" class="button" style="font-size: 50%;">Update Profile</a>
</div>

</body>
</html>