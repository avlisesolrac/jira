<?php

include 'conectar_no_banco_e_validar_sessao_do_usuario.php';

if(isset($sessaoDoUsuario) && $sessaoDoUsuario == 1){

	$identificador = $_COOKIE["identificadorDoUsuario"];

	$selectNoBanco = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE identificador = '$identificador'");

	$registroDoUsuario = mysqli_fetch_array($selectNoBanco);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset=""utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1 class="ion-android-person"> Perfil</h1>
	</header>

	<main>
		<form action="atualizar_usuario_no_banco.php" method="POST">

			<label>Identificador: </label>
			<input type="text" name="identificador" value="<?php echo $registroDoUsuario["identificador"]?>" disabled>

			<label>Primeiro Nome: </label>
			<input type="text" name="primeiro_nome" value="<?php echo $registroDoUsuario["primeiro_nome"]?>">

			<label>Sobrenome: </label>
			<input type="text" name="sobrenome" value="<?php echo $registroDoUsuario["sobrenome"]?>">

			<label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento" value="<?php echo $registroDoUsuario["data_nascimento"]?>">

			<label>E-mail: </label>
			<input type="email" name="email" value="<?php echo $registroDoUsuario["email"]?>">

			<label>Senha: </label>
			<input type="text" name="senha" value="<?php echo $registroDoUsuario["senha"]?>">

			<button class="ion-edit" name="atualizar"> Atualizar</button>
		</form>
	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="sair.php"> Sair</a></li>
			</ul>
		</nav>
	</footer>

</body>
</html>
<?php
} else {
	echo "<meta http-equiv='refresh' content='0; url=entrar.php'>";
}
?>