<?php

include "conectar_no_banco_e_validar_sessao_do_usuario.php";

if(isset($_POST["entrar"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h1>Oops, o formulário não foi preenchido completamente por gentileza preencher os dados de login.</h1><a href='entrar.php'>VOLTAR</a>";
	} else {
		$selectFetchBD = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registroDoUsuario = mysqli_fetch_array($selectFetchBD);

		if($registroDoUsuario["email"] == $email && $registroDoUsuario["senha"] == $senha){
			/*echo "<h1>Opa, é isso aí ".$registroDoUsuario["primeiro_nome"]." você acabou de entrar no sistema</h1>";*/

			setcookie('identificadorCookie',$registroDoUsuario["identificador"],time()+3600*24);
			setcookie('usuarioLogado',1,time()+3600*24);
			echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";

		} else {
			echo "<h1>Oops, verifique os dados inseridos, pois não foi encontrado em nossos registros.</h1><a href='entrar.php'>VOLTAR</a>";
		}
	}

} else {
	echo "<h3>Não foi realizado o preenchimento do formulário, clique em <a href='entrar.php'>VOLTAR</a> para acessar o sistema.</h3>";

}

?>