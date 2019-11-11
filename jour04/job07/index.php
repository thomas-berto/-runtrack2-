<form method="get">
			<label>Largeur :</label>
			<input type="text" name="largeur"/>
			
			<label>Hauteur :</label>
			<input type="text" name="hauteur"/>
			
			<input type="submit" name="dessin"/>
		</form>
		
		<?php
		
		$i=0;
			while ($i < $_GET['hauteur']){
				echo '|';
				$j=0;
				if ($j < $_GET['largeur']){
					echo('_');
					++$j;
				}
				++$i;
			}
		
		?>