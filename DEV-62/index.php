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
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<h1 class="ion-android-home"> Principal</h1>
	</header>

	<main>

	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="entrar.php"> Entrar</a></li>
				<li><a href="cadastrar.php"> Cadastrar</a></li>
			</ul>
		</nav>
	</footer>

</body>
</html>
<?php
}
?>