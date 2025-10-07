<?php

include 'conectar_no_banco.php';

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST['primeiro_nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($email) || empty($senha)){
		echo "<h1>Não houve o preenchimento completo do cadastro.<br> <a href='cadastro_de_usuario.html'>Complete o cadastro aqui.</a></h1>";
	} else {
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`primeiro_nome`, `sobrenome`, `email`, `senha`) VALUES ('$primeiro_nome', '$sobrenome', '$email', '$senha')");
		echo "<h1>O cadastro foi realizado com sucesso.<br> <a href='cadastro_de_usuario.html'>Cadastrar um novo usuário.</a></h1>";
	}
}

?>