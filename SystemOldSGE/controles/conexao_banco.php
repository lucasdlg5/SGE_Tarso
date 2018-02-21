<?php
    $bdServidor = 'localhost';
	$bdUsuario = 'root';
	$bdSenha = '';
	$bdBanco = 'web_gabaritei';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

	if(mysqli_connect_errno($conexao)){
		echo "Erro!";
		die();
	}

?>