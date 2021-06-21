<?php 

$servername="localhost";
$username = "root";
$password = "";
$dabase_name = "grh";

$conn = mysqli_connect($servername,$username,$password,$dabase_name);

if(!$conn){
    die("Connection problem " .mysqli_connect_error());
}

$query="update employes set nom='".$_POST["nom"]."', prenom='".$_POST["prenom"]."', sexe='".$_POST["gender"]."', dateNaissance='".$_POST["date"]."', adresse='".$_POST["adresse"]."', numServ=".$_POST["service"]." where code=".$_POST["user_id"];


mysqli_query($conn,$query);
mysqli_close($conn);

?>

<script type="text/javascript" language="javascript">
	alert("user has been edited successfully");
	window.location.href = "allEmpls.php";
</script>