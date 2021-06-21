<?php 

$servername="localhost";
$username = "root";
$password = "";
$dabase_name = "grh";

$conn = mysqli_connect($servername,$username,$password,$dabase_name);

if(!$conn){
    die("Connection problem " .mysqli_connect_error());
}

$query = "SELECT * FROM employes Where code=".$_POST['sub'];

$result= mysqli_query($conn,$query);

$row = mysqli_fetch_array($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employe form </title>
</head>
<body>
    <center>
        <h1>Add new employe</h1>

        

    <table border="0">

        <form action="updateEmpl.php" method="POST">
            <tr>
                <td>
                    <label for="name"> name :</label>
                </td>
                <td>
                    <input type="text" name="nom" value="<?php echo $row['nom']; ?> ">
                </td>

            </tr>

            <tr>
                <td>
                    <label for="prenom"> prenom :</label>
                </td>
                <td>
                    <input type="text" name="prenom" value="<?php echo $row['prenom']; ?>">

                </td>
            </tr>

            <tr>
                <td>
                    <label for="sexe"> sexe :</label>
                </td>
                <td>
                    <select name="gender">
                        <option value="F" name="gender" <?php if($row['sexe']=="F"){ echo "selected"; } ?>>Female</option>
                        <option value="M" name="gender" <?php if($row['sexe']=="M"){ echo "selected"; } ?>>Male</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>
                    <label for="adresse">adresse : </label>
                </td>
                <td>
                    <input type="textarea" name="adresse" value="<?php echo $row['adresse']; ?>">
                </td>

            </tr>

            <tr>
                <td>
                    <label for="date_naissance">date de naissace</label>
                </td>

                <td>
                    <input type="date" name="date" value="<?php echo $row['dateNaissance'] ?>">
                </td>
            </tr> 

            <tr>
                <td>
                    <label for="num_service">Numero de service</label>
                </td>
                <td>
                    <input type="number" name="service" value="<?php echo $row['numServ'] ?>">
                </td>
            </tr>


        

    </table>
    <br>

    <input type="submit" name="update">
    <input type="hidden" name="user_id" value="<?php echo $_POST['sub'] ?> ">

    </form>

    </center>



</body>
</html>
