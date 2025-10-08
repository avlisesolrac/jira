<?php

$servidorDoBanco='127.0.0.1';
$usuarioDoBanco='root';
$senhaDoBanco='';
$nomeDoBanco='dev62';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Por favor verificar as credenciais de conexão no Banco de Dados ou verifique com o administrador do sistema!");

if($_COOKIE["usuarioLogado"] == 1){
	$usuarioLogado = $_COOKIE["usuarioLogado"];
} else {
	$usuarioLogado = 0;
}

?>