<?php     

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'truncate':
            truncateUsuario();
            break;
    }
}


function truncateUsuario(){
$sqltruncate = "TRUNCATE table Usuario";
    if ($conexao->query($sqltruncate) === TRUE) {
	//Caso o insert seja com sucesso, adicionar este aviso ao HTML
	echo "<div class='alert alert-success' role='alert'>Tabela Limpada com sucesso!!</div>";
	}
    //CAMPO COMENTADO PARA PARAR A EXIBIÇÃO DE ERROS AO CARREGAR A PAGINA PELA PRIMEIRA VEZ
    else {
	echo "<p class='bg-danger mensagem'>Error: " . $sql . "<br>" . $conexao->error ."</p>";
	}
}
?>

          