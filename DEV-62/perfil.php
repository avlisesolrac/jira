<?php

include "conectar_no_banco_e_validar_sessao_do_usuario.php";

if($usuarioLogado){

$identificador = $_COOKIE["identificadorCookie"];

$selectFetchBD = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE identificador = '$identificador'");

$registroDoUsuario = mysqli_fetch_array($selectFetchBD);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Perfil Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<span>&lt\CódigoProfundo&gt</span>
		<nav>
			<ul>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</nav>	
	</header>

	<main>
		<form action="alterar_dados_perfil_no_banco.php" method="POST">
			<h1>Perfil do <?php echo $registroDoUsuario["primeiro_nome"]?></h1>

			<label>Identificador</label>
			<input type="text" name="identificador" value="<?php echo $registroDoUsuario["identificador"]?>" disabled>
			
			<label>Primeiro Nome</label>
			<input type="text" name="primeiro_nome" value="<?php echo $registroDoUsuario["primeiro_nome"]?>">

			<label>Sobrenome</label>
			<input type="text" name="sobrenome" value="<?php echo $registroDoUsuario["sobrenome"]?>">

			<label>Data de Nascimento</label>
			<input type="date" name="data_nascimento" value="<?php echo $registroDoUsuario["data_nascimento"]?>">

			<label>E-mail</label>
			<input type="email" name="email" value="<?php echo $registroDoUsuario["email"]?>">

			<label>Senha</label>
			<input type="text" name="senha" value="<?php echo $registroDoUsuario["senha"]?>"><br>

			<input type="submit" value="ALTERAR" name="alterar">
		</form>
	</main>

	<footer>
		<p>Todos os diretios reservados @CÓDIGOPROFUNDO 2025</p>
	</footer>

</body>
</html>

<?php
} else {
	echo "<meta http-equiv='refresh' content='0; url=entrar.php'>";
}
?>