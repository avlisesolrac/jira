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
	<title>Página de Cadastro</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Principal</a></li>
				<li><a href="entrar.php">Entrar</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section>
			<form action="gravar_usuario_no_banco.php" method="POST">
				<h1>Cadastre-se</h1>
				<ul>
					<li>
						<input type="text" name="primeiro_nome" placeholder="Primeiro Nome">
					</li>

					<li>
						<input type="text" name="sobrenome" placeholder="Sobrenome">
					</li>

					<li id="nascimento">
						<label>Data de Nascimento: </label>
						<input type="date" name="data_nascimento">
					</li>

					<li>
						<input type="email" name="email" placeholder="E-mail">
					</li>

					<li>
						<input type="password" name="senha" placeholder="Nova Senha">
					</li>

					<li>
						<input type="submit" name="cadastrar" value="CADASTRAR">
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
}
?>