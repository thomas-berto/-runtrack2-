<form method="POST" action="index.php">
<input type="text" name="nom"/>
<input type="text" name="prenom"/>
<input type="text" name="mail"/>
<input type="submit" name="ok"/> 

</form> 

<?php
var_dump($_POST);
?>