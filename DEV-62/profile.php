<?php

include "config.php";

if($login == 0){
	echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}else{

$u_id = $_COOKIE['uid'];
$getinfo = mysqli_query($conectarNoBanco,"SELECT * FROM users WHERE u_id = '$u_id'");
$arr = mysqli_fetch_array($getinfo);

?>

<span>Name: <?php echo $arr["u_name"];?> </span><br>
<span>Email: <?php echo $arr["u_email"];?> </span><br>
<span>User ID: <?php echo $arr["u_id"];?> </span><br>


<a href="logout.php">Logout</a>


<?php

}

?>