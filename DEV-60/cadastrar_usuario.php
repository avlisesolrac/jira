<?php

$servidorDoBanco = '127.0.0.1';
$usuarioDoBanco = 'root';
$senhaDoBanco = '';
$nomeDoBanco = 'dev60';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die("Verificar os dados de conexão ao Banco de Dados");

if(isset($_POST["dados_do_usuario"])){
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$nascimento = $_POST["nascimento"];
	$senha = $_POST["senha"];

	if(empty($nome) || empty($email) || empty($nascimento) || empty($senha)){
		echo "Foi identificado que o cadastro não foi prenchido por completo, portanto será necessário o preenchimento completo para finalizar o cadastro. <a href='index.html'>VOLTAR</a>";
	}else{
		mysqli_query($conectarNoBanco,"INSERT INTO `usuarios` (`nome`, `email`, `nascimento`, `senha`) VALUES ('$nome', '$email', '$nascimento', '$senha')");
		echo "Foi realizado o cadastro do usuário com sucesso no Banco de Dados. <a href='index.html'>CRIAR NOVA CONTA</a>";

	}

} else {
	echo "Não foi preenchido nenhuma informação do formulário, portanto é necessário preencher o cadastro primeiro, clique em <a href='index.html'>VOLTAR</a> para finalizar o cadastro do usuário.";
}

?>