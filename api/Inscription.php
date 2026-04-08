<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Style général */
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 0;
}

/* Titre */
h1 {
    text-align: center;
    color: #2c3e50;
    margin-top: 30px;
}

/* Formulaire */
form {
    width: 500px;
    margin: 30px auto;
    background: #ffffff;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
}

/* Table et cellules */
table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
    font-size: 15px;
    color: #34495e;
}

/* Champs de saisie */
input[type="text"],
input[type="number"],
input[type="date"],
select {
    width: 95%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #bdc3c7;
    border-radius: 5px;
    transition: 0.3s;
}

/* Effet focus */
input:focus, select:focus {
    border-color: #3498db;
    outline: none;
    box-shadow: 0px 0px 5px rgba(52,152,219,0.5);
}

/* Boutons */
input[type="submit"],
input[type="reset"] {
    padding: 10px 20px;
    margin: 10px 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s;
}

input[type="submit"] {
    background: #3498db;
    color: white;
}

input[type="reset"] {
    background: #e74c3c;
    color: white;
}

/* Effet hover */
input[type="submit"]:hover {
    background: #2980b9;
}

input[type="reset"]:hover {
    background: #c0392b;
}

/* Radios */
input[type="radio"] {
    margin-left: 10px;
}
    </style>
</head>
<body>
    <h1>Inscription des étudiants</h1>
    <form method="POST" action="Inscription">
        <table>
            <tr>
                <td>Numéro d'inscription : <input type="number" name="ins" id="insID"></td>
            </tr>
            <tr>
                <td>Nom et prénom : <input type="text" name="nom" id="nomID"></td>
            </tr>
            <tr>
                <td>
                    Ville : <select name="ville" id="villeID">
                        <option value="Tanger">Tanger</option>
                        <option value="Casa">Casa</option>
                        <option value="Rabat">Rabat</option>
                    </select>
                </td>
            </tr>
            <tr>
              <td>Date de naissance : <input type="date" name="ddn" id="ddnID"></td>  
            </tr>
            <tr>
                <td>
                    Sexe : <input type="radio" name="gender" value="Garçon" id="genderID">Garçon
                           <input type="radio" name="gender" value="Fille" id="genderID">Fille
                </td>
            </tr>
            <tr>
                <td>Loisirs : <input type="text" name="hobbies" id="hobbiesID"></td>
            </tr>
            <tr>
                <td>Informations complémentaires : <input type="text" name="info" id="infoID"></td>
            </tr>
            <tr>
                <td><input type="submit"name="action1" value="Envoyer"></td>
                <td><input type="reset" value="Reinitialiser"></td>
            </tr>
        </table>
    </form>
    <?php
    if (!empty($_POST["action1"])) {
    $num_ins = $_POST["ins"];
    $nom = $_POST["nom"];
    $ville = $_POST["ville"];
    $date_nais = $_POST["ddn"];
    $gender = $_POST["gender"];
    $loisirs = $_POST["hobbies"];
    $infor = $_POST["info"]; 
    echo "<table border='1' width='100%' rules='all' style='border-color:red;'>";
    echo "<tr><td>Numéro d'inscription : " . $num_ins . "</td></tr>";
    echo "<tr><td>Nom et prénom : " . $nom . "</td></tr>";
    echo "<tr><td>Ville : " . $ville . "</td></tr>";
    echo "<tr><td>Date de naissance : " . $date_nais . "</td></tr>";
    echo "<tr><td>Sexe : " . $gender . "</td></tr>";
    echo "<tr><td>Loisirs : " . $loisirs . "</td></tr>";
    echo "<tr><td>Informations complémentaires : " . $infor . "</td></tr>";
    echo "</table>";
}
    ?>
</body>
</html>