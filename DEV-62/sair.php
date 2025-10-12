<?php

if(isset($_COOKIE["sessaoDoUsuario"])){
	if($_COOKIE["sessaoDoUsuario"]){
		setcookie('sessaoDoUsuario',0,time() + 3600*24);
		setcookie('identificadorDoUsuario','',time() + 3600*24);
	}
}

echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>