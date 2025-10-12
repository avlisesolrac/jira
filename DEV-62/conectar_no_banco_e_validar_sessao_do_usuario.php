<?php

$servidorEPortaDoBanco='127.0.0.1:3306';
$usuarioDoBanco='root';
$senhaDoBanco='';
$nomeDoBanco='dev62';

$conectarNoBanco = mysqli_connect($servidorEPortaDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Por favor verificar as credenciais de conexão com o banco de dados!");

if(isset($_COOKIE["sessaoDoUsuario"])){
	$sessaoDoUsuario = $_COOKIE["sessaoDoUsuario"];
}
?>