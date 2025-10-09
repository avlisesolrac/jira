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
	<title>Página de Entrada</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<nav>
			<ul>
				<li><a href="index.php">Principal</a></li>
				<li><a href="cadastrar.php">Cadastrar</a></li>
			</ul>
		</nav>
	</header>

	<main id="entrar">
		<section>
			<form action="validar_usuario_no_banco.php" method="POST">
				<h1>Autentique-se</h1>
				<ul>
					<li>
						<input type="email" name="email" placeholder="Seu E-mail">
					</li>

					<li>
						<input type="password" name="senha" placeholder="Sua  Senha">
					</li>

					<li>
						<input type="submit" name="entrar" value="ENTRAR">
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