<?php

include "conectar_no_banco_e_validar_sessao_do_usuario.php";

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h1>Oops, o formulário não foi preenchido completamente por gentileza preencher todo o formulário.</h1><a href='cadastrar.php'>VOLTAR</a>";
	} else {

		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`primeiro_nome`, `sobrenome`, `data_nascimento`, `email`, `senha`) VALUES ('$primeiro_nome', '$sobrenome', '$data_nascimento', '$email', '$senha')");
	
		echo "<h1>$primeiro_nome, Seja Bem Vindo! O cadastro foi finalizado com sucesso.</h1><a href='entrar.php'>Entrar no sistema?</a>";
		
	}
} else {
	echo "<h3>Não foi realizado o preenchimento dos dados do formulário de cadastro, clique em <a href='cadastrar.php'>VOLTAR</a> para cadastrar o usuário no sistema.</h3>";
}

?>
