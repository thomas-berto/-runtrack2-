	<?php 	
	$booleen = true;
	$integer = 21; 
	$float = 1.21;
	$string = 'glouglou';	   ?>
	
	
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet">
    </head>
    
	
<body>
  
  
  <table>
    <thead> 
        <tr>
            <th> type  </th>
            <th> nom </th>
            <th> Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> Boléens</td>
            <td>$booleen</td>
<td> <?php echo $booleen; ?></td>      
  </tr>
        <tr>
            <td>String</td>
            <td>$string</td>
    <td><?php echo $string; ?></td>

        </tr>
        <tr>
            <td>float</td>
            <td>$float</td>
			<td><?php echo $float; ?></td>
       </tr>
        <tr>
      <td>Integer</td>
   <td>$integer</td>
	<td><?php echo $integer; ?></td>
        </tr>
    </tbody>

</table>

  
	</body>
</html>
	   
       
   