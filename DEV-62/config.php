<?php

$servidorDoBanco='127.0.0.1';
$usuarioDoBanco='root';
$senhaDoBanco='';
$nomeDoBanco='dev62';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Verifique as credenciais de conexão com o banco de dados ou verifique com o administrador do sistema.");

if(isset($_COOKIE["login"])){
	$login = $_COOKIE["login"];
}else{
	$login = 0;
}

?>