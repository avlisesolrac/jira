<?php

include 'conectar_no_banco_e_validar_sessao_do_usuario.php';

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$data_nascimento = $_POST["data_nascimento"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	echo "$primeiro_nome<br>$sobrenome<br>$data_nascimento<br>$email<br>$senha";

	if(empty($primeiro_nome) || empty($sobrenome) || empty($data_nascimento) || empty($email) || empty($senha)){
		echo "<h1>Oops, por favor preencher os dados do formulário para finalizar o cadastro</h1><a href='cadastrar.php'>Volte aqui!</a>";
	} else {
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`identificador`, `primeiro_nome`, `sobrenome`, `data_nascimento`, `email`, `senha`) VALUES (NULL, '$primeiro_nome', '$sobrenome', '$data_nascimento', '$email', '$senha')");
		echo "<script>alert('".$primeiro_nome."! Obrigado pelas informações e o seu cadastro foi finalizado com sucesso.');</script>";
		echo "<meta http-equiv='refresh' content='0; url=entrar.php'>";
		/*echo "<h1>$primeiro_nome! Obrigado pelas informações e o seu cadastro foi finalizado com sucesso.</h1><a href='entrar.php'>Entrar</a>";*/
	}

} else {
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>