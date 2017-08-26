<?php
include('connect.php');
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>
  Home
	</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>
	<li><a>ADMIN</a></li>
	<li><a class="active" href="a_index.php">Home</a></li>
<!-- 	<li><a href="a_profile.php">Profile</a></li> --> 
	<li><a href="a_image.php">Images</a></li>
	<li><a href="a_activity.php">Activity</a></li>
	<li><a href="a_logout.php">Log Out</a></li>
	<!-- <li style="float: right;"><a href="#about">About</a></li> -->
	<li style="float: left;"><a href="a_profile.php">
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


<div align="center" class="text-area">
<form action="" method="Post">
  <textarea class="area" name="num" placeholder="Lets chat..." required></textarea>
  <input type="submit" name="submit" style="font-size: 150%; float: right; " value="Post"/>
</form>
<?php
if(isset($_POST['submit'])){
  $txt = $_POST['num'];
  $sql = "INSERT INTO comment2(ac_text,ac_date,a_id)values('$txt',now(),'$_SESSION[loggedid]')";
  $result = mysqli_query($conn, $sql);
  if ($result){
    //header('location: u.index.php');
    echo "You are posted a new post.";
  }else{
    echo "Error!!!";
  }
}
?>
</div>

<div class="showPost" align="center">
  <table width='80%' border=0>

  <tr bgcolor='#CCCCCC'>
    <td style="width: 5%;">Posted Id</td>
    <td style="width: 10%;">Post Date</td>
    <td style="width: 85%;">Post Content</td>
  </tr>

<div class="comment_text">
  <?php 
  $query= "SELECT * FROM comment2";
  $result = mysqli_query($conn, $query);

  while($res = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>".$res['a_id']."</td>";
    echo "<td>".$res['ac_date']."</td>";
    echo "<td>".$res['ac_text']."</td>";

}
  ?>
</div>
</table>
</div>


</body>
</html>