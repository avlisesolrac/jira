<?php

include "config_banco.php";

if(isset($_POST["dados_cadastro"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	
	if(empty($primeiro_nome) || empty($sobrenome) || empty($email) || empty($senha)){
		echo "<h1>Por favor preencher todos os dados para finalizar o cadastro.</h1><p><a href='criar_conta.html'>Finalizar cadastro.</a></p>";
	}else{
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`primeiro_nome`, `sobrenome`, `email`, `senha`) VALUES ('$primeiro_nome', '$sobrenome', '$email', '$senha')");
		echo "<h1>Obrigado pelas informações, o cadastro foi finalizado com sucesso.</h1><p><a href='index.html'>Clique aqui para Entrar.</p>";
	}
}

?>