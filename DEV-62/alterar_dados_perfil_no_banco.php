<?php

include "conectar_no_banco_e_validar_sessao_do_usuario.php";

if(isset($_POST["alterar"])){
	
	/*
	*Precisei alterar a atribuição de POST para COOKIE do identificador, porque o campo do identificador em perfil.php está disabilitado para evitar que o usuário tente alterar a chave primária.
	*$identificador = $_POST["identificador"];
	*
	*/

	$identificador = $_COOKIE["identificadorCookie"];
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "Oops, algum campo ficou em branco, <a href='perfil.php'>clique aqui</a> para voltar e preencher todos os campos necessários!";
	} else {
		mysqli_query($conectarNoBanco, "UPDATE `usuarios` SET `primeiro_nome` = '$primeiro_nome', `sobrenome` = '$sobrenome', `data_nascimento` = '$data_nascimento' , `email` = '$email', `senha` = '$senha' WHERE `usuarios`.`identificador` = $identificador");
		echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
	}

} else {
	echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
}

?>