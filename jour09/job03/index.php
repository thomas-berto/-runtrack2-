<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");
$requete1 = "SELECT prenom,nom,naissance FROM etudiants WHERE sexe='Femme'";
$requete2 = "SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE table_name = 'etudiants' AND COLUMN_NAME='nom' OR  COLUMN_NAME='prenom' OR COLUMN_NAME='naissance'";
$query1 = mysqli_query($connexion,$requete1);
$query2 = mysqli_query($connexion,$requete2);
$resultat = mysqli_fetch_all($query1);
$resultat2 = mysqli_fetch_all($query2);
mysqli_close($connexion);
?>


<html>
    <head>
        <meta charset="utf-8" />
        <title>Etudiants</title>
    </head>
    <body>

<table>
<tr>
<th>NOM</th><th>PRENOM</th><th>Naissance</th>
<tr>
<?php
foreach ($resultat as $key)
{
    echo    "<tr>";
    foreach ($key as $value)

    echo "<td>" .$value.  "</td>";
}
{
    echo    "</tr>";
}
    
  
?>
</table>
</body>