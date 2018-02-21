<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sge Tarso - Cadastro Novo Usuario</title>
	<!-- FAVICON -->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <!-- CONEXÃO COM O BANCO DE DADOS PHP -->





<?php
require_once 'controles/truncate_tabela_usuario.php';
require_once 'controles/conexao_banco.php';
// Opecações com Ternarios verificando se caso o campo esteja com informações para ser enviada, caso nao tenha será informado uma mensagem
$nome = isset ($_GET["nome"])?$_GET["nome"]:"Nao Informado";
$login = isset ($_GET["login"])?$_GET["login"]:"Nao Informado";
$senha = isset ($_GET["senha"])?$_GET["senha"]:"Nao Informado";
$email = isset ($_GET["email"])?$_GET["email"]:"Nao Informado";
$nascimento = isset ($_GET["nascimento"])?$_GET["nascimento"]:"Nao Informado";
$idade = isset ($_GET["idade"])?$_GET["idade"]:"Nao Informado";
$sexo = isset ($_GET["sexo"])?$_GET["sexo"]:"Nao Informado";
$tipo = isset ($_GET["tipo"])?$_GET["tipo"]:"Nao Informado";


//FAZ A UTILIZAÇÃO DO ARQUIVO DE INSERT E VERIFICA OS CAMPOS ANTES DE CHAMAR O ARQUIVO
if ($nome != "Nao Informado" && $login != "Nao Informado" && $senha != "Nao Informado" && $email != "Nao Informado" && $nascimento != "Nao Informado" && $idade != "Nao Informado" && $sexo != "Nao Informado" && $tipo != "Nao Informado") {
 require_once 'controles/insert_banco.php';
} 


/*
$nomeErr = $loginErr = $senhaErr = $emailErr = $nascimentoErr = $idadeErr = $sexoErr ="";
// REALIZA A VERIFICAÇÃO DOS CAMPOS OBRIGATORIOS 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  //Verificar se o campo NOME está em branco.
  if (empty($_POST["nome"])) {
    $nomeErr = "É preciso preencher o campo Nome!!";
  } 
  
  else {
    $nome = test_input($_POST["nome"]);
    // Checa se os campos contém espaços em branco
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "Somente letras são permitidos neste campo."; 
    }
  
  }
  	//Checa o campo de LOGIN se está vazio.
  	 if (empty($_POST["login"])) {
    $loginErr = "É preciso preencher o campo Login!!";
  } 
  
  //Checa o campo de SENHA se está vazio.
   if (empty($_POST["senha"])) {
    $nomeErr = "É preciso preencher o campo Senha!!";
  }

 //Checa o campo de EMAIL verificando se está no formato correto
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Checa o email se está no formato correto
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    }
  }

  
  }
// Checa o campo de sexo
  if (empty($_POST["sexo"])) {
    $sexoErr = "Este campo precisa estar selecionado!!";
  } else {
    $sexo = test_input($_POST["sexo"]);
  }
  */

?>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="dashboard.php">
                        Cadastros
                    </a>
                </li>
                <li>
                    <a href="area_cadastro.php">Area de Cadastros</a>
                </li>
                <li>
                    <a href="dashboard_sge/dashboard_sge.html">Area de Gestão Escolar</a>
                </li>
                <li>
                    <a href="area_sge.php">Gerenciador Sistema TARSO</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
					
					<!-- <ol class="breadcrumb">
					  <li><a href="dashboard.php">Home</a></li>
  					  <li class="active">Area de Cadastros</li> 
					</ol> -->
				
                        <h1>Cadastro de Usuario Novo SGE</h1>
                        <p>Preencha os campos abaixo para ter acesso ao sistema SGE TARSO.</p>                        
                        <!--<a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Abrir Menu</a> -->

<br>
          

						<div class="input-group">
						
	<!-- #######INICIO######  -->	
	
		
<form id="form_cadastro">
	<div class="input-group">
    <form action="cadastro_usuario.php" method="post"> 
  <span class="input-group-addon" id="sizing-addon2">ID</span>
  <input name="ID" type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
</div>
<br>

<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nome Completo</span>
  <input name="nome" type="text" class="form-control" placeholder="Nome Completo" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Login</span>
  <input name="login" type="text" class="form-control" placeholder="Login" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Senha</span>
  <input name="senha" type="text" class="form-control" placeholder="Senha" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">E-mail</span>
  <input name="email" type="text" class="form-control" placeholder="E-mail" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Data de Nascimento</span>
  <input name="nascimento" type="text" class="form-control" placeholder="Data de Nascimento" aria-describedby="sizing-addon2">
</div>

<br>

<div class="row">
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" aria-label="..." name="sexo" value="0" id="masculino" checked>
      </span>
      <input type="text" class="form-control" aria-label="" placeholder="SEXO MASCULINO" disabled="disabled" >
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->

  
  <div class="col-lg-6">
    <div class="input-group">
      <span class="input-group-addon">
        <input type="radio" aria-label="..." name="sexo" value="1" id="feminino" >
      </span>
      <input type="text" class="form-control" aria-label="" placeholder="SEXO FEMININO" disabled="disabled">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->

<br>


<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Idade</span>
  <input name="idade"  type="text" class="form-control" placeholder="Idade" aria-describedby="sizing-addon2">
</div>
<br>



<button  type="submit" class="btn btn-success btn-lg" name="tipo" value="0">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
</button>

<!-- em Button abaixo, se encontra a execução do Script LimparFormulario para apagar os campos com a ação onclick. -->
<!--<button type="button" class="btn btn-danger btn-lg" onclick="limparFormulario()" value="Resetar Formulario" >-->
<button type="button" class="btn btn-danger btn-lg" onclick="location.href='cadastro_novo_usuario.php'" value="Resetar Formulario" >
  <span class="glyphicon glyphicon-erase" aria-hidden="true" ></span> Limpar Campos
</button>

<!--
<button name="truncate" id="truncate" class="btn btn-danger btn-lg">
  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Clique para melhorar sua semana!
</button> -->
</form>

<!-- RESET DO FORMULARIO ACIMA COM O BOTÃO LIMPAR CAMPOS NOTA: ALTERADO O RESET COMO REFRESH DA PÁGINA POR CONTA DO $_POST-->
<script>
function limparFormulario() {
    document.getElementById("form_cadastro").reset();
}
</script>


<!-- Tentativa de truncate table via ajax -->
<!-- 
<script>
$(document).ready(function(){
    $('.truncate').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'controle/truncate_tabela_usuario.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });

});
</script>
 -->

	<!-- #######FIM######  -->

					
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
