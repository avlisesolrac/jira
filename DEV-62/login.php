<?php

include 'config.php';

if($login == 1){
	echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
} else {

if(isset($_POST["u_btn"])){
	$u_email = $_POST["u_email"];
	$u_pass = $_POST["u_pass"];

	$mysqlifdb = mysqli_query($conectarNoBanco,"SELECT * FROM users WHERE u_email = '$u_email' AND u_pass = '$u_pass'");

	$row = mysqli_fetch_array($mysqlifdb);

	if($row["u_email"] == $u_email && $row["u_pass"] == $u_pass){
		/*echo "Welcome ".$row["u_name"]." in Your Account";*/
		
		setcookie('uid',$row['u_id'],time()+3600*24);
		setcookie('login',1,time()+3600*24);
		echo " <meta http-equiv='refresh' content='0; url=profile.php'>";
	} else {
		echo "Email or password Incorrect";
	}
}


?>

<form action="login.php" method="POST">

	<label>Email</label>
	<input type="email" name="u_email"><br><br>

	<label>Password</label>
	<input type="password" name="u_pass"><br><br>

	<input type="submit" name="u_btn" value="Sign In"><br></br>

	<a href="register.php">Sign Up</a>

</form>

<?php

}

?>