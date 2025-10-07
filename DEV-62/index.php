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
	<title>Página Inicial</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

	<header>
		<span>&lt\CódigoProfundo&gt</span>
		<nav>
			<ul>
				<li><a href="entrar.php">Entrar</a></li>
				<li><a href="cadastrar.php">Cadastrar</a></li>
			</ul>
		</nav>
	</header>

</body>
</html>

<?php
}
?>