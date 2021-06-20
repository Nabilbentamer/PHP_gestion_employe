<?php 

$servname = "localhost";
$username = "root";
$password = "";
$db_name = "grh"; 

// create a connection 

$conn = mysqli_connect($servname,$username,$password,$db_name);

if(!$conn){
	echo " connect to dabase failed";
	die("Connection problem " .mysqli_connect_error());
}


?>