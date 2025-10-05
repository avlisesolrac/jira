<?php

$servidor_do_banco='127.0.0.1';
$usuario_do_banco='root';
$senha_do_banco='';
$nome_do_banco='dev55';

$conectar_no_banco = mysqli_connect($servidor_do_banco,$usuario_do_banco,$senha_do_banco,$nome_do_banco);

if(isset($_POST["gostei"])){
	$gostei = $_POST["gostei"];
	mysqli_query($conectar_no_banco,"INSERT INTO `gostos` (`gostei`) VALUES ('$gostei+1')");

}

/*elseif(isset($_POST["nao-gostei"])){
	$nao-gostei = $_POST["nao-gostei"];
	mysqli_query($conectar_no_banco,"INSERT INTO `gostos` (`nao-gostei`) VALUES ('$nao-gostei')");

}*/

?>