
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Employe form </title>
</head>
<body>
    <center>
        <h1>Add new employe</h1>

        <form action="valAddEmpl" method="POST">

    <table border="0">
        
            <tr>
                <td>
                    <label for="name"> name :</label>
                </td>
                <td>
                    <input type="text" name="name">

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
                    <select>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
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
                    <input type="date" name="date_naissance">
                </td>
            </tr> 

            <tr>
                <td>
                    <label for="num_service">Numero de service</label>
                </td>
                <td>
                    <input type="number" name="num_service">
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
