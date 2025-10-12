<?php

include 'conectar_no_banco.php';

if(isset($_POST['cadastro'])){
	$primeiro_nome = $_POST['primeiro_nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	if(empty($primeiro_nome) || empty($sobrenome) || empty($email) || empty($senha)){
		echo "<h1>Oops! Por gentileza preencher todos os campos para finalizar o cadastro! <a href='cadastrar.html'>Voltar.</a></h1>";
	} else {
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`id_usuario`, `primeiro_nome`, `sobrenome`, `email`, `senha`) VALUES (NULL, '$primeiro_nome', '$sobrenome', '$email', '$senha')");

		echo "<h1>$primeiro_nome obrigado pelos dados informados e o usuário foi cadastrado com sucesso, <a href='entrar.html'>Entrar aqui</a></h1>";
	}

} else {
	echo "<meta http-equiv='refresh' content='0; url=index.html'>";
}

?>