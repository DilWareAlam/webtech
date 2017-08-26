<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>  
  <li><a>ADMIN</a></li>
</ul>

<div class="signin" align="center">
<h1>Admin SignIn</h1>
	<table>
		<form action method="POST">
			<tr><td>Username:</td><td><input type="text" name="name" placeholder="username"></td></tr>
			<tr><td>Password:</td><td><input type="Password" name="pass" placeholder="password"></td></tr>
			<tr><td><input type="submit" name="submit" value="Sign-In"></td></tr>
		</form>
	</table>
	<p>
		You can't register without authority permission.
	</p>
</div>

</body>
</html>

<?php 
include("connect.php");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql = "SELECT * FROM admin WHERE a_name = '$name' and a_pass = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count==1)
      {
    session_start();
    $_SESSION['loggedid'] = $row['a_id'];
    header("location:a_index.php");
    } else{
      echo "<h5>Try again...</h5>";
}
}
?>