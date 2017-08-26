<?php 
$servername= "localhost";
$username= "root";
$password= "";
$dbname= "cse408";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
	die("Connection Failed");
}

?>