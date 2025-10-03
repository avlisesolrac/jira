<?php

include 'config.php';

if(isset($_POST["cadastrar"])){
	$nome_usuario = $_POST["nome"];
	$email_usuario = $_POST["email"];
	$senha_usuario = $_POST["senha"];

	if(empty($nome_usuario) || empty($email_usuario) || empty($senha_usuario)){
		echo "Por favor preencher todos os campos para finalizar o cadastro!";
	}else{
		$cadastrar = mysqli_query($conectar,"INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome_usuario', '$email_usuario', '$senha_usuario')");
		echo "Usuário Cadastrado com sucesso!";
	}
}

?>