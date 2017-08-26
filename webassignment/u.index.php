<?php
session_start();
include('connect.php');
$page = $_SERVER['PHP_SELF'];
$sec = "2";
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
	<li><a class="active" href="u.index.php">Home</a></li>
<!-- 	<li><a href="u.profile.php">Profile</a></li> -->
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


<div align="center" class="text-area">
<form action="" method="Post">
  <textarea class="area" name="num" placeholder="Lets chat..." required></textarea>
  <input type="submit" name="submit" style="font-size: 150%; float: right; " value="Post"/>
</form>
<?php
if(isset($_POST['submit'])){
  $txt = $_POST['num'];
  $sql = "INSERT INTO comment(c_text,c_date,u_id,u_name)values('$txt',now(),'$_SESSION[loggedid]','$a')"; //The PHP date() function formats a timestamp to a more readable date and time.
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

  <tr bgcolor='#CCCCCC' align="center">
    <td style="width: 5%;">Posted Id</td>
    <td style="width: 10%;">Name</td>
    <td style="width: 20%;">Post Date</td>
    <td style="width: 85%;">Post Content</td>
  </tr>

<div class="comment_text">
  <?php 
  $query= "SELECT * FROM comment";
  $result = mysqli_query($conn, $query);

  while($res = mysqli_fetch_array($result)) //Fetch a result row as a numeric array and as an associative array
   {
    echo "<tr>";
    echo "<td>".$res['u_id']."</td>";
    echo "<td>".$res['u_name']."</td>";
    echo "<td>".$res['c_date']."</td>";
    echo "<td>".$res['c_text']."</td>";

}
  ?>
</div>
</table>
</div>


</body>
</html>