<?php
$vrais=true;
$nom='thomas';
$age=21;
$float=2.22;
?>
 <table>
    <thead> 
        <tr>
            <th> type  </th>
            <th> nom </th>
            <th> valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> Booléen</td>
            <td>vrais</td>
            <td> <?php echo $vrais; ?></td>      
        </tr>

        <tr>
            <td>Chaîne de caractères</td>
            <td>nom</td>
            <td><?php echo $nom; ?></td>
        </tr>
        
        <tr>
            <td>Entier</td>
            <td>age</td>
	        <td><?php echo $age; ?></td>
        </tr>

        <tr>
            <td>Nombre à virgule flottante</td>
            <td>float</td>
			<td><?php echo $float; ?></td>
        </tr>
        
       
    </tbody>

</table>
