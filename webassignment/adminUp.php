<?php
include('connect.php');
session_start();
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

<div align="center">
<h1 style="color: red; text-align: center;">SignUp For Admins:</h1>
	<table>
		<form action="" method="post">
			<tr><td>Name:</td><td><input type="text" name="name" required></td></tr>
			<tr><td>Email:</td><td><input type="text" name="mail" required></td></tr>
			<tr><td>Age:</td><td><input type="text" name="age" required></td></tr>
			<tr><td>Address:</td><td><input type="text" name="add" required></td></tr>
			<tr><td>Contact:</td><td><input type="text" name="cont" required></td></tr>
			<tr><td>Password:</td><td><input type="Password" name="pass1" required></td></tr>
			<tr><td>Confirm Password:</td><td><input type="Password" name="pass2" required></td></tr>
			<tr><td><input type="submit" name="submit"></td></tr>
		</form>
	</table>
	<p>
		SignUp Already? SignIn <a href="a_signin.php"><b>Here</b></a>
	</p>
</div>

</body>
</html>

<?php 

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$age=$_POST['age'];
	$add = $_POST['add'];
	$cont=$_POST['cont'];
	$password=$_POST['pass1'];
	$check_pass=$_POST['pass2'];

	if($password==$check_pass){
		$query =
		"INSERT into admin(a_name,a_email,a_age,a_address,a_cont,a_pass) 
		values('$name','$email','$age','$add','$cont','$password'); ";

  
  		$result = mysqli_query($conn, $query);

  		if($result)
  		{
    		header("location: a_signin.php");
  		}else{
  			echo "<h5>Try Again...</h5>";
  		}
	}
}
?>