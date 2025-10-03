<?php

include 'conectar_no_banco.php';

if(isset($_POST["dados_inseridos"])){
	$nome_usuario = $_POST["nome_usuario"];
	$email_usuario = $_POST["email_usuario"];
	$senha_usuario = $_POST["senha_usuario"];

	if(empty($nome_usuario) || empty($email_usuario) || empty($senha_usuario)){
		echo "Não houve o preencimento completo do formulário de cadastro de usuário, por favor retorne <a href='index.html'>AQUI</a>.";
	} else {
		$gravar_dados_inseridos = mysqli_query($conectar_no_banco,"INSERT INTO `usuarios` (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('$nome_usuario', '$email_usuario', '$senha_usuario')");
		
		echo "Dados gravados com sucesso! <a href='index.html'>Criar novo usuário?</a>";
	}
}

?>