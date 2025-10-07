<?php

include 'conectar_no_banco.php';

if(isset($_POST["autenticar"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h1>Por favor preencher os dados de login para prosseguir com a entrada do usuário. <a href='entrada_de_usuario.html'>Tentar Novamente.</a></h1>";
	} else {
		$mysqlifdb = mysqli_query($conectarNoBanco,"SELECT * from usuarios WHERE email = '$email' AND senha = '$senha'");

		$registro_usuario = mysqli_fetch_array($mysqlifdb);

		if($registro_usuario["email"] == $email && $registro_usuario["senha"] == $senha){
			echo "<h1>Parabéns ".$registro_usuario["primeiro_nome"]." , você acabou de entrar no sistema.</h1><br><br><a href='index.html'>Sair</a>";

		}
	}
}

?>