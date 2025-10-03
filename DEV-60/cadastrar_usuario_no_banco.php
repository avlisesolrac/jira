<?php

include 'conexao_com_banco.php';

if(isset($_POST["cadastrar"])){
	$primeiro_nome = $_POST["primeiro_nome"];
	$sobrenome = $_POST["sobrenome"];
	$nascimento = $_POST["nascimento"];
	$sexo = $_POST["sexo"];
	$telefone = $_POST["telefone"];
	$cep = $_POST["cep"];
	$rua = $_POST["rua"];
	$numero_rua = $_POST["numero_rua"];
	$complemento_rua = $_POST["complemento_rua"];
	$cidade = $_POST["cidade"];

	if(empty($primeiro_nome) || empty($sobrenome) || empty($nascimento) || empty($sexo) || empty($telefone) || empty($cep) || empty($rua) || empty($numero_rua) || empty($complemento_rua) || empty($cidade)){
		echo "Por favor preencher todos os campos para finalizar o cadastro!";
		echo '<a href="index.html">Voltar</a>';
	} else{
		$cadastrarUsuario = mysqli_query($conectar,"INSERT INTO `usuario` (`primeiro_nome`, `sobrenome`, `nascimento`, `sexo`, `telefone`, `cep`, `rua`, `numero_rua`, `complemento_rua`, `cidade`) VALUES ('$primeiro_nome', '$sobrenome', '$nascimento', '$sexo', '$telefone', '$cep', '$rua', '$numero_rua', '$complemento_rua', '$cidade')");
		
		echo "Usuário Cadastrado com sucesso.";
		echo '<a href="index.html">Criar Novo Cadastro</a>';
	}

}

?>