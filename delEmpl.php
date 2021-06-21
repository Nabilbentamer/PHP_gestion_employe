<?php

//create a connection 

$servername = "localhost";
$username = "root";
$password = "";
$database_name = "grh";

$conn = mysqli_connect($servername,$username,$password,$database_name);

if(!$conn){
	die(" Failed to connect to database" .mysqli_connect_error());
 }

$query= "DELETE from employes where code=".$_POST['sub'];


mysqli_query($conn,$query);
mysqli_close($conn);

?>

<script language="javascript" type="text/javascript">
	alert("Utilisateur a été supprimé avec succès");
	window.location.href=("allEmpls.php");
</script>