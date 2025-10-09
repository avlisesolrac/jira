<?php

include "conectar_no_banco_e_controlar_sessao_do_usuario.php";
	
	setcookie('usuarioLogado',0,time()+3600*24);
	setcookie('identificadorCookie',' ',time()+3600*24);

	echo "<meta http-equiv='refresh' content='0; url=index.php'>";

?>