<?php

include 'config.php';

if($login == 1){
	echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
}else{

if(isset($_POST["u_btn"])){
	$u_name = $_POST["u_name"];
	$u_email = $_POST["u_email"];
	$u_pass = $_POST["u_pass"];

	mysqli_query($conectarNoBanco,"INSERT INTO `users` (`u_name`, `u_email`, `u_pass`) VALUES ('$u_name', '$u_email', '$u_pass')");

	echo "Success";
}

?>

<form action="register.php" method="POST">

	<label>Name</label>
	<input type="text" name="u_name"><br><br>

	<label>Email</label>
	<input type="email" name="u_email"><br><br>

	<label>Password</label>
	<input type="password" name="u_pass"><br><br>

	<input type="submit" name="u_btn" value="Sign Up"><br><br>

	<a href="login.php">Login</a>
</form>

<?php

}

?>