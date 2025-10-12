<?php

$servidorDoBanco = '127.0.0.1:3306';
$usuarioDoBanco = 'root';
$senhaDoBanco = '';
$nomeDoBanco = 'dev61';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Foi apresentado erro na conexão com o banco de dados, favor verificar as credenciais de acesso a base.");

?>