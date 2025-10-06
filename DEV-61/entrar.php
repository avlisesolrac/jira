<?php

include 'config_banco.php';

if(isset($_POST["dados_login"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h1>Por favor preencher todos os dados para entrar no sistema.</h1><p><a href='index.html'>Logar novamente.</a></p>";
	} else{
		$mysqlfdb = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registro = mysqli_fetch_array($mysqlfdb);

		if($registro["email"] == $email && $registro["senha"] == $senha){
			echo "<h1>Parabéns <i style='border: 1px solid tomato;'>".$registro["primeiro_nome"]."</i>seus dados de login foram validados com sucesso e você acaba de entrar no sistema.</h1>";

		}else{
			echo "<h1>E-mail ou senha incorretos, <a href='index.html'>tente novamente</a></h1>";
		}
	}
}

?>