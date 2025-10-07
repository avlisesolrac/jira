<?php

include "conectar_no_banco_e_controlar_sessao.php";

if($statusDoLogin == 1){
	echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
} else {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header id="cabecalho_titulo">
		<h1>Cadastro de usuário</h1>
	</header>

	<main>
		<form action="cadastrar_usuario_no_banco.php" method="POST">
			<input type="text" name="primeiro_nome" placeholder="Digite seu Primeiro Nome">
			<input type="text" name="sobrenome" placeholder="Digite seu Sobrenome">
			<label>Data de Nascimento: </label>
			<input type="date" name="data_nascimento" placeholder="Digite seu Primeiro Nome">
			<input type="email" name="email" placeholder="Digite seu E-mail">
			<input type="password" name="senha" placeholder="Digite sua senha nova">
			<button class="ion-ios-personadd-outline" name="cadastrar"> Cadastrar</button>

		</form>
	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="index.php">Página Inicial</a></li>
				<li><a href="entrar.php">Entrar</a></li>

			</ul>
		</nav>
	</footer>

</body>
</html>

<?php
}
?>