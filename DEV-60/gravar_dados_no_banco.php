<?php

include 'conectar_e_selecionar_banco.php';

if(isset($_POST["dados_do_formulario"])){
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($nome) || empty($email) || empty($senha)){
		echo "Não houve o preenchimento completo do formulário, realizar o cadastro completo <a href='index.html'>AQUI</a>";
	} else {
		$gravar_dados_no_banco = mysqli_query($conectar_no_servidor_de_banco,"INSERT INTO `usuarios` (`nome`, `email`, `senha`) VALUES ('$nome', '$email', '$senha')");
		
		echo "Os dados foram gravados com sucesso no banco, <a href='index.html'>criar novo cadastro?</a>";
	}

}

?>