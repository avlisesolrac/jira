<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";

if(isset($_POST["entrar"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h2>Oops, não foi preenchido os campos de email ou senha! <a href='entrar.php'>Tentar novamente.</a></h2>";
	} else {
		$selectNoBanco = mysqli_query($conectarNoBanco, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registroDoUsuario = mysqli_fetch_array($selectNoBanco);

		if($registroDoUsuario["email"] == $email && $registroDoUsuario["senha"] == $senha){

			/*echo "<h2>Parabéns ".$registroDoUsuario["primeiro_nome"]." você acabou de entrar em nosso sistema.</h2>";*/

			/*
			*
			*Setando o valor de chave primária coletado do banco na coluna identificador do usuario que acabou de logar na variável identificadorCookie para saber com qual usuário iremos tratar durante a sessão do usuário no sistema, com o time de até 24 horas.
			*
			*/
			setcookie('identificadorCookie', $registroDoUsuario["identificador"],time()+3600*24);

			/*
			*
			*Setando o valor igual a 1 para a variável usuarioLogado do Cookie com permanência de até 24 horas.
			*
			*/
			setcookie('usuarioLogado',1,time()+3600*24);

			echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";

		} else {
			echo "<h2>Oops! Por gentileza verificar o e-mail e senha, pois não existe em nossa base de dados <a href='entrar.php'>tentar novamente.</a></h2>";
		}
	}

} else {
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>