<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>  
  <li><a href="index.php">Home</a></li>
  <li><a href="signin.php">Sign In</a></li> 
<!--   <li><a href="#about">About</a></li> -->
</ul>

<div class="signin" align="center">
<h1>SignIn From</h1>
	<table>
		<form action method="POST">
			<tr><td>Username:</td><td><input type="text" name="name" placeholder="username"></td></tr>
			<tr><td>Password:</td><td><input type="Password" name="pass" placeholder="password"></td></tr>
			<tr><td><input type="submit" name="submit" value="Sign-In"></td></tr>
		</form>
	</table>
	<p>
		Haven't registered? Click <a href="index.php"><b>Here</b></a>
	</p>
</div>

</body>
</html>

<?php 
include("connect.php");
if(isset($_POST['submit'])){
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql = "SELECT * FROM users WHERE u_name = '$name' and u_pass = '$pass'";
      $result = mysqli_query($conn,$sql);//function performs a query against the database.
      $row = mysqli_fetch_assoc($result);// Fetch a result row as an associative array    
      $count = mysqli_num_rows($result);//function returns the number of rows in a result set.
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count==1)
      {
    session_start();
    $_SESSION['loggedid'] = $row['u_id']; //An associative array containing session variables available to the current script. See the Session functions documentation for more information on how this is used.
    header("location:u.index.php");
    } else{
      echo "<h5>Try again...</h5>";
}
}
?>