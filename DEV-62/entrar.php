<?php

include "conectar_no_banco_e_validar_sessao_do_usuario.php";

if($usuarioLogado){
	echo "<meta http-equiv='refresh' content='0; url=perfil.php'>";
} else {

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Entrar</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<span>&lt\CódigoProfundo&gt</span>
		<nav>
			<ul>
				<li><a href="index.php">Principal</a></li>
				<li><a href="cadastrar.php">Cadastrar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<form action="validar_usuario_no_banco.php" method="POST">
			<h1>Autentique-se</h1>

			<label>E-mail</label>
			<input type="email" name="email">

			<label>Senha</label>
			<input type="password" name="senha">

			<input type="submit" value="Entrar" name="entrar">
		</form>
	</main>

	<footer>
		<p>Todos os diretios reservados @CÓDIGOPROFUNDO 2025</p>
	</footer>

</body>
</html>

<?php
}
?>