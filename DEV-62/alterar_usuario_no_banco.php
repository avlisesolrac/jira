<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";

if(isset($_POST["alterar"])){
	$identificador = $_COOKIE["identificadorCookie"];
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h2>Oops! ficou algum campo em branco <a href='perfil.php'>voltar.</a></h2>";
	} else {
		mysqli_query($conectarNoBanco, "UPDATE `usuarios` SET `primeiro_nome` = '$primeiro_nome', `sobrenome` = '$sobrenome', `data_nascimento` = '$data_nascimento', `email` = '$email', `senha` = '$senha' WHERE `usuarios`.`identificador` = $identificador");

		echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
	}
}else{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>