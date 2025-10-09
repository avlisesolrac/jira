<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";

if($usuarioLogado == 1){
	$identificador = $_COOKIE["identificadorCookie"];

	$selectNoBanco = mysqli_query($conectarNoBanco,"SELECT * FROM usuarios WHERE identificador = '$identificador'");

	$registroDoUsuario = mysqli_fetch_array($selectNoBanco);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Página de Perfil</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="sair.php">SAIR</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<form action="alterar_usuario_no_banco.php" method="POST">
				<h1>Perfil de <?php echo $registroDoUsuario["primeiro_nome"]?></h1>
				<ul>
					<li>
						<input type="text" name="identificador" value="<?php echo $registroDoUsuario["identificador"]?>" disabled>
					</li>
					<li>
						<input type="text" name="primeiro_nome" value="<?php echo $registroDoUsuario["primeiro_nome"]?>" placeholder="Primeiro Nome">
					</li>

					<li>
						<input type="text" name="sobrenome" value="<?php echo $registroDoUsuario["sobrenome"]?>" placeholder="Sobrenome">
					</li>

					<li id="nascimento">
						<label>Data de Nascimento: </label>
						<input type="date" name="data_nascimento" value="<?php echo $registroDoUsuario["data_nascimento"]?>">
					</li>

					<li>
						<input type="email" name="email" value="<?php echo $registroDoUsuario["email"]?>" placeholder="Email">
					</li>

					<li>
						<input type="text" name="senha" value="<?php echo $registroDoUsuario["senha"]?>" placeholder="Senha">
					</li>

					<li>
						<input type="submit" name="alterar" value="ALTERAR">
					</li>
				</ul>
			</form>
		</section>
	</main>

	<footer>
		<p>Todos os direitos reservados. 2025</p>
	</footer>

</body>
</html>
<?php
} else {
	echo "<meta http-equiv='refresh' content='0; url=entrar.php'>";
}
?>