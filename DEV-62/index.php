<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";

if($usuarioLogado == 1){
	echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
} else {
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página Principal</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="entrar.php">Entrar</a></li>
				<li><a href="cadastrar.php">Cadastrar</a></li>
			</ul>
		</nav>
	</header>

	<main id="principal">
		
	</main>

	<footer>
		<p>Todos os direitos reservados. 2025</p>
	</footer>

</body>
</html>
<?php
}
?>