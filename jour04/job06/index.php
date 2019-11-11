<form method="get">
			
			<input type="text" name="nombre"/>
			
			<input type="submit" value="Pair/Impair" name="nono"/>
		</form>
		
		<?php
			if(isset($_GET['nono'])){
				if ($_GET['nombre'] % 2 == 0){
					echo 'Nombre Pair';
				}
				else{
					echo 'Nombre Impair';
				}
			}
		?>