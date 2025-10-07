<?php

include "conectar_no_banco_e_controlar_sessao.php";

if($statusDoLogin == 0){
	echo "<meta http-equiv='refresh' content='0; url=entrar.php'>";
} else {

	$identificador = $_COOKIE["identificadorCookie"];

	$selectFetchBD = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE identificador = '$identificador'");

	$registroDoUsuario = mysqli_fetch_array($selectFetchBD);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil do Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header id="cabecalho_titulo">
		<h1>Perfil do usuário</h1>
	</header>

	<main>
		<form id="profile">
			<label>Primeiro Nome: <?php echo $registroDoUsuario["primeiro_nome"];?></label>
			<label>Sobrenome: <?php echo $registroDoUsuario["sobrenome"];?></label>
			<label>Data de Nascimento: <?php echo $registroDoUsuario["data_nascimento"];?></label>
			<label>Email: <?php echo $registroDoUsuario["email"];?></label>
			<label>Senha: <?php echo $registroDoUsuario["senha"];?></label>
			<label>Identificador: <?php echo $registroDoUsuario["identificador"];?></label>
		</form>
	</main>

	<footer>
		<nav>
			<ul>
				<li><a href="sair.php">Sair</a></li>

			</ul>
		</nav>
	</footer>

</body>
</html>

<?php
}
?>