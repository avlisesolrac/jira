<?php

include 'conectar_no_banco_e_validar_sessao_do_usuario.php';

if(isset($_POST["entrar"])){
	$email = $_POST["email"];
	$senha = $_POST["senha"];

	if(empty($email) || empty($senha)){
		echo "<h1>Oops, por favor preencher os dados do formulário para entrar no sistema</h1><a href='entrar.php'> Volte aqui!</a>";
	} else {
		$selectNoBanco = mysqli_query($conectarNoBanco," SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

		$registroDoUsuario = mysqli_fetch_array($selectNoBanco);

		if($registroDoUsuario["email"] == $email && $registroDoUsuario["senha"] == $senha){
			/*echo "<h1>".$registroDoUsuario["primeiro_nome"].", você acabou de entrar no sistema</h1>";*/

			setcookie('identificadorDoUsuario',$registroDoUsuario["identificador"],time() + 3600*24);
			setcookie('sessaoDoUsuario',1,time() + 3600*24);

			echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";

		} else {
			echo "<h1>Oops, revise os dados de login, pois não foram encontrados em nossos registros.</h1><a href='entrar.php'> Volte aqui!</a>";
		}

	}
} else {
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}

?>