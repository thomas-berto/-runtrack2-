<?php 
$connexion = mysqli_connect("localhost", "root", "", "jour08");

$requete1 = "SELECT SUM(superficie) AS superficie_totale FROM etage";

$query1 = mysqli_query($connexion,$requete1);

$resultat = mysqli_fetch_all($query1);

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
<th>Nombre</th>
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