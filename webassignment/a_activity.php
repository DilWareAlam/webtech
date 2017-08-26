<?php
include('connect.php');
session_start();
$page = $_SERVER['PHP_SELF'];
$sec = "20";
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

<div class="activity" align="center">
  <table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td>Serial</td>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>Address</td>
    <td>Contact</td>
    <td>Update</td>
  </tr>
  <?php 
  $query= "SELECT * FROM users";
  $result = mysqli_query($conn, $query);
  //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
  while($res = mysqli_fetch_array($result)) {     
    echo "<tr>";
    echo "<td>".$res['u_id']."</td>";
    echo "<td>".$res['u_name']."</td>";
    echo "<td>".$res['u_email']."</td>";
    echo "<td>".$res['u_age']."</td>";
    echo "<td>".$res['u_address']."</td>";
    echo "<td>".$res['u_cont']."</td>";  
    echo "<td><a href=\"a_delete.php?id=$res[u_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";   
  }
  ?>
  </table>
</div>




</body>
</html>