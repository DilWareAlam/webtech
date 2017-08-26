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
        $sql="SELECT * FROM users WHERE u_id='$_SESSION[loggedid]'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res);
      $a=$row['u_name'];
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
	<li><a class="active" href="u.index.php">Home</a></li>
<!-- 	<li><a href="u.profile.php">Profile</a></li>  -->
<li style="float: left;"><a href="u.profile.php">
    <b><?php
      if(isset($_SESSION['loggedid'])){
        $sql="SELECT * FROM users WHERE u_id='$_SESSION[loggedid]'";
      $res=mysqli_query($conn,$sql);
      $row=mysqli_fetch_assoc($res); //The mysqli_fetch_assoc() function fetches a result row as an associative array.Note: Fieldnames returned from this function are case-sensitive.
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

<div align="center" margin="auto" style="font-size: 250%; margin-top: 50px;">
<?php
$sql = "SELECT * FROM users WHERE u_id = '".$_SESSION['loggedid']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "  <strong>Name: </trong>" . $row["u_name"]. "<br> ";
        echo "<strong>Email: </strong>" . $row["u_email"]. "<br> ";
        echo "  <strong>Age: </strong>" . $row["u_age"]. "<br> ";
        echo "<strong>Address: </strong>" . $row["u_address"]. "<br> ";
        echo "<strong>Contact: </strong>" . $row["u_cont"]. "<br> ";
    }
  }
?>
<a href="u_edit.php" class="button" style="font-size: 50%;">Update Profile</a>
</div>

</body>
</html>