
<?php

$str='LES mechants';

function leetspeak($str)
{
$resultat = str_replace(array('A','B','E','G','L','S','T'),array('4','8','3','6','1','5','7'),$str);
return($resultat);
			}
			
echo leetspeak($str);
		

	?>
