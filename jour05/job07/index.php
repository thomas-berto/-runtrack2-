<?php
			if (!isset($_SESSION['nbvisites']))
			{
				$_SESSION['nbvisites'] = 1;
			}
			else
			{
				$_SESSION['nbvisites']++;
			}
			if (isset($_GET['button']))
			{
				session_destroy();
				unset($_SESSION['nbvisites']);
				header('location:index.php');
			}
			echo 'Nombre de fois que vous visionnez cette page : '.$_SESSION['nbvisites'];
		?>
		
		<form method="get">
			<input type="submit" name="button" value="Réinitialisation">
		</form>