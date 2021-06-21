<?php

session_start();

if(!isset($_SESSION['username']))
    {
        header("Location:index.html");
    }

?>

<!DOCTYPE html>
 <html lang="en">
 <head>

 	<title>Show All Employee</title>
 </head>
 <body>
 	<center>
 		<h1>Show All Employe</h1>
 	 </center>

 	 <center>
 	 	
 	 
 	 <table border="1">

 	 	<tr>
            <?php
                if($_SESSION['type']=="AD"){
                    ?>
 	 		<th colspan="3">Action</th>
            <?php 
            }
            ?>
 	 		<th>Nom</th>
 	 		<th>Prenom</th>
 	 		<th>adresse</th>
 	 		<th>Sexe</th>
 	 		<th>date naissance</th>
 	 		<th>Numero  de service</th>
 	 	</tr>

 	 	<?php

 	 	$conn = mysqli_connect("localhost","root","","grh");

 	 	if(!$conn){
 	 		die("Failled to connect to database " . mysqli_connect_error());
 	 	}

 	 	$query = "SELECT* FROM employes";

 	 	$result = mysqli_query($conn,$query);

 	 	while($row = mysqli_fetch_array($result)){

 	 	

 	 	?>


 	 	<tr>
 	 		
            <?php
                if($_SESSION['type']=="AD"){
                    ?>
                
 	 		<form action="formAddEmpl.php" method="POST">
 	 			<td>
 	 				<button>
 	 					<img width="20" height="20" src="add.png">
 	 				</button>
 	 			</td>
 	 		</form>

 	 		<form action="delEmpl.php" method="POST">
 	 			<td>
 	 				<button type="submit" name="sub" value="<?php echo $row['code']; ?>">
 	 					<img height="20" width="20" src="delete.png">
 	 				</button>
 	 			</td>
 	 			
 	 		</form>

 	 		<form action="editEmpl.php" method="POST">
 	 			<td>
 	 				<button type="submit" name="sub" value="<?php echo $row['code']; ?>">
 	 					<img width="20" height="20" src="edit.png">
 	 				</button>
 	 			</td>
 	 		</form>
            <?php
            }
            ?>



 	 		<td> <?php  echo $row['nom']; ?> </td>
 	 		<td> <?php  echo $row['prenom']; ?></td>
 	 		<td> <?php  echo $row['adresse']; ?> </td>
 	 		<td> <?php  echo $row['sexe']; ?> </td>
 	 		<td> <?php  echo $row['dateNaissance']; ?> </td>
 	 		<td> <?php  echo $row['numServ']; ?></td>

 	 	</tr>

 	 	<?php  
 	 }
 	 ?>

 	 </table>
 	 </center>

 </body>
 </html> 