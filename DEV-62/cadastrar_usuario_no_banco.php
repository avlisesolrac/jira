<?php

include "conectar_no_banco_e_controlar_sessao.php";

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h1>Não houve o preenchimento completo do formulário, favor preencher todos os campos para finalizar o cadastro do usuário.</h1><a href='cadastrar.php'>VOLTAR</a>";
	} else {
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`primeiro_nome`, `sobrenome`, `data_nascimento`, `email`, `senha`) VALUES ('$primeiro_nome', '$sobrenome', '$data_nascimento', '$email', '$senha')");
		echo "<h1>Parabéns ".$primeiro_nome.", cadastro finalizado com sucesso.</h1><a href='entrar.php'>Entrar</a>";
	}

}

?>