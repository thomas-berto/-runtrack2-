
<form action="index.php" method="get" >
	<label for="Nom">Nom</label>
	<input type="text" name="Nom"/>
	
	<label for="Prenom">Prenom</label>
	<input type="text" name="Prenom"/>
	
	<label for="eMail">Mail</label>
	<input type="mail" name="eMail"/>
	
	<label for="Tel">Téléphone</label>
	<input type="tel" name="Tel"/>
	
	<input type="submit"/>
</form>

<table>
<thead>
<tr>
<th> Arguments </th>
<th> Valeurs </th>
</tr>
</thead>
<tbody>
<?php
var_dump($_GET);
foreach($_GET as $key => $val)
{
    echo "<tr><td>".$key."</td><td>".$val."</td></tr>";
}
?>
</tbody>
</table>

