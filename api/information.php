<?php
if(!empty){
$num_ins=$_POST["ins"];
$nom=$_POST["nom"];
$ville=$_POST["ville"];
$date_nais=$_POST["ddn"];
$gender=$_POST["gender"];
$loisirs=$_POST["hobbies"];
$infor=$_POST["info"]; 
}
echo("<table border='1' width='100%' rules='all'>")
echo("<tr>")
echo "<td>" "Numero D'inscription :"+$num_ins "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Nom et prénom :"+$nom "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Ville :"+$ville "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Date de naissance :"+$date_nais "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Sexe :"+$gender "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Loisirs :"+$loisirs "</td>"
echo("</tr>")
echo("<tr>")
echo "<td>" "Informations complémentaires :"+$infor "</td>"
echo("</tr>")
echo("</table>")
?>