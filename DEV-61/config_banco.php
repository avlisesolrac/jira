<?php

$servidorDoBanco = '127.0.0.1';
$usuarioDoBanco = 'root';
$senhaDoBanco = '';
$nomeDoBanco = 'dev61';

$conectarNoBanco = mysqli_connect($servidorDoBanco,$usuarioDoBanco,$senhaDoBanco,$nomeDoBanco) or die ("Por favor verificar as credenciais de conexão com a base, ou verifique com o administrador do sistema!");

?>