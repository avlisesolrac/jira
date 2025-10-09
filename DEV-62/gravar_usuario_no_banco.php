<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h2>Oops! Precisa preencher por completo o formulário de <a href='cadastro.php'>cadastro.</a></h2>";
	} else {
		mysqli_query($conectarNoBanco, "INSERT INTO `usuarios` (`primeiro_nome`, `sobrenome`, `data_nascimento`, `email`, `senha`) VALUES ('$primeiro_nome', '$sobrenome', '$data_nascimento', '$email', '$senha')");

		echo "<h2>$primeiro_nome, estamos agradecidos pelas informações fornecidas, <a href='entrar.php'>clique aqui para entrar.</a></h2>";
	}
}else{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>