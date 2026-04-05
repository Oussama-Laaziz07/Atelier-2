<?php
    if (!empty($_GET)) {
    $num_ins = $_GET["ins"];
    $nom = $_GET["nom"];
    $ville = $_GET["ville"];
    $date_nais = $_GET["ddn"];
    $gender = $_GET["gender"];
    $loisirs = $_GET["hobbies"];
    $infor = $_GET["info"]; 
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