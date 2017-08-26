<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<style type="text/css"></style>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

<ul>
  <li><a class="active" href="index.php">Home</a></li>
  <li><a href="signin.php">Sign In</a></li> 
<!--   <li><a href="#about">About</a></li> -->
</ul>

<div class="signup"> 
<h1 style="color: white; text-align: center;">SignUp</h1>
	<table>
		<form action="" method="post">
			<tr><td>Name:</td><td><input type="text" name="name" required></td></tr>
			<tr><td>Email:</td><td><input type="text" name="mail" required></td></tr>
			<tr><td>Age:</td><td><input type="text" name="age" required></td></tr>
			<tr><td>Address:</td><td><input type="text" name="add" required></td></tr>
			<tr><td>Contact:</td><td><input type="text" name="cont" required></td></tr>
			<tr><td>Password:</td><td><input type="Password" name="pass1" required></td></tr>
			<tr><td>Confirm Password:</td><td><input type="Password" name="pass2" required></td></tr>
			<tr><td><input class="submit" style="float: right; margin-top:20px;" type="submit" name="submit" ></td></tr>
		</form>
	</table>
	<p>
		SignUp Already? Sign In <a href="signin.php"><b>Here</b></a> <!--The href attribute specifies the URL of the page the link goes to.

If the href attribute is not present, the <a> tag is not a hyperlink. -->
	</p>
</div>

</body>
</html>

<?php 

session_start(); //Start new or resume existing session

include("connect.php"); 
//sign up part

if(isset($_POST['submit'])) //The isset () function is used to check whether a variable is set or not. If a variable is already unset with unset() function, it will no longer be set. The isset() function return false if testing variable contains a NULL
{
	//Sanitize the POST values
	$name=$_POST['name'];
	$email=$_POST['mail'];
	$age=$_POST['age'];
	$add = $_POST['add'];
	$cont=$_POST['cont'];
	$password=$_POST['pass1'];
	$check_pass=$_POST['pass2'];

	if($password==$check_pass){
		$query =
		"INSERT into users(u_name,u_email,u_age,u_address,u_cont,u_pass) 
		values('$name','$email','$age','$add','$cont','$password'); ";

  
  		$result = mysqli_query($conn, $query); // query er maddhome database er vitore jaoa 

  		if($result)
  		{
    		header("location: signin.php"); //The header() function sends a raw HTTP header to a client.It is important to notice that header() must be called before any actual output is sent
  		}else{
  			echo "<h5>Try Again...</h5>";
  		}
	}
}
?>