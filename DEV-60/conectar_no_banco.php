<?php

$servidor_do_banco="127.0.0.1";
$usuario_do_banco="root";
$senha_do_banco="";
$nome_do_banco="dev60";

$conectar_no_banco = mysqli_connect($servidor_do_banco,$usuario_do_banco,$senha_do_banco) or die("Não foi possível conectar no banco com os dados informados, verifique se os dados do servidor estão corretos!");

$selecionar_banco = mysqli_select_db($conectar_no_banco,$nome_do_banco) or die("Não foi possível selecionar o banco de dados informado, favor verificar com o administrador de sistemas.");

?>