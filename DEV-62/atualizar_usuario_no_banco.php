<?php

include 'conectar_no_banco_e_validar_sessao_do_usuario.php';

if(isset($_POST["atualizar"])){
	$identificador = $_COOKIE["identificadorDoUsuario"];
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($identificador) || empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h1>Oops, algum campo ficou em branco!</h1><a href='perfil.php'>Voltar</a>";
	} else {
		mysqli_query($conectarNoBanco,"UPDATE `usuarios` SET `primeiro_nome` = '$primeiro_nome', `sobrenome` = '$sobrenome', `data_nascimento` = '$data_nascimento', `email` = '$email', `senha` = '$senha' WHERE `usuarios`.`identificador` = '$identificador'");
		echo "<script>alert('Atualizado com sucesso!')</script>";
		echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
	}
}
?>