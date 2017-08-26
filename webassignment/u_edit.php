<?php
// including the database connection file
include("connect.php");
session_start();

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($conn, $_SESSION['loggedid']);
	
	//$id = mysqli_real_escape_string($conn, $_POST['id']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$age = mysqli_real_escape_string($conn, $_POST['age']);
	$cont = mysqli_real_escape_string($conn, $_POST['cont']);
	$add = mysqli_real_escape_string($conn, $_POST['address']);	
	
	// checking empty fields
	if(empty($name) || empty($email) || empty($age) || empty($cont) || empty($add)) {	
			
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($age)) {
			echo "<font color='red'>age field is empty.</font><br/>";
		}
		
		if(empty($cont)) {
			echo "<font color='red'>Contact field is empty.</font><br/>";
		}

		if(empty($add)) {
			echo "<font color='red'>Adderss field is empty.</font><br/>";		
	} else {	
		//updating the table
		$query = "UPDATE users SET u_name='$name',u_email='$email',u_age='$age',u_cont='$cont',u_address='$add' WHERE u_id= '$id'";
		//$result = mysqli_query($conn, "UPDATE admin SET name='$name',email='$email',contact='$cont',address='$add' WHERE a_id= '$id'");
		$result = mysqli_query($conn, $query);

		//redirectig to the display page. In our case, it is index.php
		if($result){
		header("Location: u.profile.php");
	}else{
		echo "False Query!";
	}
}
}
}
?>

<?php
//getting id from url
//$id = $_GET['id'];
$id = $_SESSION['loggedid'];

//selecting data associated with this particular id
$result = mysqli_query($conn, "SELECT * FROM users WHERE u_id = $id");

while($res = mysqli_fetch_array($result))
{
	$name = $res['u_name'];
	$email = $res['u_email'];
	$age = $res['u_age'];
	$cont = $res['u_cont'];
	$add = $res['u_address'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>
	Update profile
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

<div class="profile" align="center">
<form name="form1" method="post" action="u_edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr> 
				<td>Contact</td>
				<td><input type="text" name="cont" value="<?php echo $cont;?>"></td>
			</tr>
			<tr> 
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $add;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_SESSION['loggedid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
	</div>


</body>
</html>