<?php

include 'config.php';

if(isset($_POST["u_btn"])){
	$u_name = $_POST["u_name"];
	$u_email = $_POST["u_email"];
	$u_pass = $_POST["u_pass"];

	mysqli_query($conectarNoBanco,"INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");
	
	echo "Success!";
}

?>

<form action="register.php" method="post">
	<label>Name</label>
	<input type="text" name="u_name" value=""><br />

	<label>Email</label>
	<input type="email" name="u_email" value=""><br />

	<label>Password</label>
	<input type="password" name="u_pass" value=""><br />
	
	<input type="submit" name="u_btn" value="sign up"><br />

	<a href="login.php">Sign in</a>
</form>