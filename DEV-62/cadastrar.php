<?php

include 'conectar_no_banco_e_validar_sessao_do_usuario.php';

if(isset($sessaoDoUsuario) && $sessaoDoUsuario == 1){
	echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
} else {
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset=""utf-8>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1 class="ion-ios-people-outline"> Cadastro</h1>
	</header>

	<main>
		<form action="gravar_usuario_no_banco.php" method="POST">
			<label>Primeiro Nome: </label>
			<input type="text" name="primeiro_nome">

			<label>Sobrenome: </label>
			<input type="text" name="sobrenome">

			<label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento">

			<label>E-mail: </label>
			<input type="email" name="email">

			<label>Senha: </label>
			<input type="password" name="senha">

			<button class="ion-ios-personadd-outline" name="cadastrar"> Cadastrar</button>
		</form>
	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="index.php"> Principal</a></li>
				<li><a href="entrar.php"> Entrar</a></li>
			</ul>
		</nav>
	</footer>

</body>
</html>
<?php
}
?>