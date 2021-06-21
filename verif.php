<?php

session_start();

$servername="localhost";
$username = "root";
$password = "";
$dabase_name = "grh";

$conn = mysqli_connect($servername,$username,$password,$dabase_name);

if(!$conn){
    die("Connection problem " .mysqli_connect_error());
}

$query = "SELECT* FROM USERS where login LIKE '".$_POST['username']."' and password LIKE '".$_POST['password']."'";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);

if($row){

	$_SESSION['username']=$row['login'];
	$_SESSION['password']=$row['password'];
	$_SESSION['type'] = $row['type'];

	header("Location:allEmpls.php");

}

else{
	header("Location:index.html");
}

?>