
<?php 
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

        <form action="valAddEmpl.php" method="POST">
            <tr>
                <td>
                    <label for="name"> name :</label>
                </td>
                <td>
                    <input type="text" name="nom">

                </td>

            </tr>

            <tr>
                <td>
                    <label for="prenom"> prenom :</label>
                </td>
                <td>
                    <input type="text" name="prenom">

                </td>
            </tr>

            <tr>
                <td>
                    <label for="sexe"> sexe :</label>
                </td>
                <td>
                    <select name="gender">
                        <option value="F" name="gender">Female</option>
                        <option value="M" name="gender">Male</option>
                    </select>

                </td>
            </tr>

            <tr>
                <td>
                    <label for="adresse">adresse : </label>
                </td>
                <td>
                    <input type="textarea" name="adresse">
                </td>

            </tr>

            <tr>
                <td>
                    <label for="date_naissance">date de naissace</label>
                </td>

                <td>
                    <input type="date" name="date">
                </td>
            </tr> 

            <tr>
                <td>
                    <label for="num_service">Numero de service</label>
                </td>
                <td>
                    <input type="number" name="service">
                </td>
            </tr>


        

    </table>
    <br>

    <input type="submit" name="submit">
    <input type="reset" name="cancel">

    </form>

    </center>



</body>
</html>
