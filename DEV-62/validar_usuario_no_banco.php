<?php

include "conectar_no_banco_e_controlar_sessao.php";

if(isset($_POST["entrar"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h1>Por favor preencher os campos de usuário e senha para entrar no sistema.</h1><a href='entrar.php'>VOLTAR</a>";
	} else {
		
		$selectFetchNoBanco = mysqli_query($conectarNoBanco, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registroDoUsuario = mysqli_fetch_array($selectFetchNoBanco);

		if($registroDoUsuario["email"] == $email && $registroDoUsuario["senha"] == $senha){
			echo "<h1>".$registroDoUsuario["primeiro_nome"].", você acabou de entrar no sistema.</h1><a href='entrar.php'>Sair</a>";

			/*Chamando a função setcookie para atribuir a variavel identificadorCookie o mesmo identificador do usuário que está registrado no banco e atribuindo o tempo de 24h para ficar setado*/
			setcookie('identificadorCookie',$registroDoUsuario["identificador"],time()+3600*24);

			/*Chamando a função setcookie atribuindo o valor 1 para a variavel statusDoLogin para ser utilizado no sistema de usuário para controlar a sessão do login enquanto o usuário estiver logado, também durante o período máximo de até 24 horas*/
			setcookie('statusDoLogin',1,time()+3600*24);

			echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";

		} else {
			echo "<h1>Por favor verificar o usuário e senha informado, pois não existe em nossos registros.</h1><a href='entrar.php'>VOLTAR</a>";
		}
	}
}

?>