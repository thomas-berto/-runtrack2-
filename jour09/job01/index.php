<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete1 = "SELECT * FROM etudiants";
$requete2 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'etudiants'";
$query1 = mysqli_query($connexion,$requete1);
$query2 = mysqli_query($connexion,$requete2);
$resultat = mysqli_fetch_all($query1);
$resultat2 = mysqli_fetch_all($query2);
mysqli_close($connexion);
?>


<table>
<tr>
<th>ID</th><th>Prenom</th><th>Nom</th><th>Naissance</th><th>Sexe</th><th>Email</th>
<tr>
<?php
foreach ($resultat as $key)
{
    echo    "<tr>";
    foreach ($key as $value)

    echo "<td>".$value. "</td>";
}
{
    echo    "</tr>";
}
    
  
?>
</table>