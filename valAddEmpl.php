<?php 

$servname = "localhost";
$username = "root";
$password = "";
$db_name = "grh"; 

// create a connection 

$conn = mysqli_connect($servname,$username,$password,$db_name);

if(!$conn){
	echo " connect to dabase failed";
	die("Connection problem " . mysqli_connect_error());
}

$query = "INSERT INTO employes (nom,prenom,sexe,adresse,dateNaissance,numServ) VALUES ('".$_POST['nom']."','".$_POST['prenom']."','".$_POST['gender']."','".$_POST['adresse']."','".$_POST['date']."',".$_POST['service']." )";


mysqli_query($conn,$query);
mysqli_close($conn);

header("Location: allEmpls.php");



?>