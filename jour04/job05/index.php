<form method="post" action="index.php">
   <input type="username" name="username" />
   <input type="password" name="password" />
   <input type="submit" value="ok" />
</form>

<?php 

    $username = "John";
    $password = "Rambo";
   
    if($_POST["username"]=="John" & $_POST["password"]=="Rambo")

	echo 'cest pas ma guerre';
else{
	echo 'Votre pire cauchemar';
}


?>