<?php

$servidorDoBanco='127.0.0.1';
$usuarioDoBanco='root';
$senhaDoBanco='';
$nomeDoBanco='dev62';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Verifique as credenciais de acesso ao Banco ou verifique com o administrador do sistema.");

if(isset($_COOKIE["statusDoLogin"])){
	$statusDoLogin = $_COOKIE["statusDoLogin"];
} else{
	$statusDoLogin = 0;
}

?>