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
	<title>Entrada de Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header id="cabecalho_titulo">
		<h1>Entrada de Usuário</h1>
	</header>

	<main>
		<form action="validar_usuario_no_banco.php" method="POST" id="entrar">
			<input type="email" name="email" placeholder="Digite seu E-mail">
			<input type="password" name="senha" placeholder="Digite sua senha">
			<button class="ion-ios-personadd-outline" name="entrar"> Entrar</button>

		</form>
	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="index.php">Página Inicial</a></li>
				<li><a href="cadastrar.php">Cadastrar</a></li>

			</ul>
		</nav>
	</footer>

</body>
</html>

<?php
}
?>