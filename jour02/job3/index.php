<?php 
		
$nombre=0;

while($nombre<=100)
{
	if($nombre<=20)
	{
		echo'<i>',$nombre,'</i></br>';
	}
	
	else if(25<=$nombre&&$nombre<=50)
	{
		if ($nombre==42)
		{
		echo'La Plateforme_ ','</br>';
		$nombre++;
		}
	
		echo'<u>',$nombre,'</u></br>';
	}
	
	else 
	{ 
	echo $nombre.'<br>';
	}
	$nombre++;
}


?>