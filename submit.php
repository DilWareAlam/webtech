<?php

echo $_POST["fname"];
?>

<br>
<br>

<?php
echo $_POST["lname"];

?>

<br>
<br>

<?php
$e = $_POST["email"];
$user = stristr($e, '.', true); //stristr here i using.
echo $user;

echo "<br>";
echo "<br>";

echo strrev($e); //reversing the input.

echo "<br>";
echo "<br>";

echo substr($e,7)."<br>";  //substring koresi ei khane
?>

<br>
<br>

<?php
$str = $_POST["msg"];
print_r (explode(" ",$str));  //explode kore ei khane.


echo "<br>";
echo "<br>";


$a=$_POST["array"];
foreach ($a as $v) {
	echo "<br>";
    echo($v); //print all array element.
    }

echo "<br>";
echo "<br>";
 
var_dump($a); //dumping koresi

echo "<br>";
echo "<br>";

if (in_array("shariful", $a)) {
	echo "Match found";
}                                    //ei ta IF-Else er kaj koresi
else{
  echo "Match not found";
}
?>

<br>
<br>

<?php
//server niye kaj koresi 
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>

<br>
<br>

<?php
echo trim($e,"diom"); //remove charcter from both side

echo "<br>";
echo "<br>";

echo stripslashes("Who\'s Peter Griffin?"); //Remove the backslash
?>