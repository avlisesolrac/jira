<?php

include 'conectar_no_banco.php';

if(isset($_POST['entrar'])){
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if(empty($email) || empty($senha)){
		echo "<h1>Oops! Por gentileza preencher todos os campos para entrar no sistema! <a href='entrar.html'>Tentar novamente.</a></h1>";
	} else {
		$selectNoBanco = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registroDoUsuario = mysqli_fetch_array($selectNoBanco);

		echo "<h1>Olá! ".$registroDoUsuario['primeiro_nome'].", você acabou de entrar no sistema!</h1><a href='index.html'>SAIR</a>";
	}

} else {
	echo "<meta http-equiv='refresh' content='0; url=index.html'>";
}

?>