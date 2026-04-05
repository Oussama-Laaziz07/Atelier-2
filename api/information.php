<?php
    if (!empty($_POST)) {
    $num_ins = $_POST["ins"];
    $nom = $_POST["nom"];
    $ville = $_POST["ville"];
    $date_nais = $_POST["ddn"];
    $gender = $_POST["gender"];
    $loisirs = $_POST["hobbies"];
    $infor = $_POST["info"]; 
    echo "<table border='1' width='100%' rules='all'>";
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