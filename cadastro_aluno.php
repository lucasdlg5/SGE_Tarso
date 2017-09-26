<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sge Tarso - Cadastro Aluno</title>
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
	<link href="jsform.css" rel="stylesheet">

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
require_once 'controles/conexao_banco.php'
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

					<ol class="breadcrumb">
					  <li><a href="dashboard.php">Home</a></li>
  					  <li class="active">Cadastro Aluno</li>
					</ol>

                        <h1>Cadastro de Aluno Novo</h1>
                        <p>Preencha os campos abaixo para cadastrar um novo usuario no banco de dados.</p>
                        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Abrir Menu</a>
<br>
<br>
						<div class="input-group">
	<!-- #######INICIO######  -->

<!-- #######INICIO######  -->


<form id="form_cadastro">
<h3>Aproveite e já insira o aluno no seu posto!</h3>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Selecione o curso do aluno(a)
    <span class="caret"></span>
  </button>
  <a href="cadastro_curso.php" class="btn btn-primary" id="cadastro_curso">Nao encontrou o curso? Cadastre!</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Informática Básica</a></li>
    <li><a href="#">Programação</a></li>
    <li><a href="#">Programação em Arduino</a></li>
    <li><a href="#">Programação em Raspbery PI</a></li>
    <li><a href="#">Redes de Computadores</a></li>
    <li><a href="#">Desenvolvimento WEB</a></li>
    <li><a href="#">Workshops</a></li>
  </ul>
</div>
<BR>
<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Selecione a turma do aluno(a)
    <span class="caret"></span>
  </button>
  <a href="cadastro_curso.php" class="btn btn-primary" id="cadastro_curso">Nao encontrou a turma? Cadastre!</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">TI-BT14</a></li>
    <li><a href="#">TI-AN14</a></li>
    <li><a href="#">TI-AM14</a></li>
  </ul>
</div>

<br>
<br>
<h3>Preenchimento Obrigatório!</h3>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nome Completo</span>
  <input name="nome" type="text" class="form-control" placeholder="Nome Completo" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nome do Pai/Responsável</span>
  <input name="nome" type="text" class="form-control" placeholder="Nome do Pai/Responsável" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Nome da Mãe/Responsável</span>
  <input name="nome" type="text" class="form-control" placeholder="Nome da Mãe/Responsável" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">RG</span>
  <input name="nome" type="text" class="form-control" placeholder="RG" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">CPF</span>
  <input name="nome" type="text" class="form-control" placeholder="CPF" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Bairro</span>
  <input name="nome" type="text" class="form-control" placeholder="Bairro" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Cidade</span>
  <input name="nome" type="text" class="form-control" placeholder="Bairro" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Estado</span>
  <input name="nome" type="text" class="form-control" placeholder="Bairro" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Telefone Fixo</span>
  <input name="nome" type="text" class="form-control" placeholder="Telefone Fixo" aria-describedby="sizing-addon2">
</div>
<br>
<div class="input-group">
  <span class="input-group-addon" id="sizing-addon2">Celular/WhatsApp</span>
  <input name="nome" type="text" class="form-control" placeholder="Celular/WhatsApp" aria-describedby="sizing-addon2">
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




<button  type="submit" class="btn btn-success btn-lg">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Cadastrar
</button>

<!-- em Button abaixo, se encontra a execução do Script LimparFormulario para apagar os campos com a ação onclick. -->
<!--<button type="button" class="btn btn-danger btn-lg" onclick="limparFormulario()" value="Resetar Formulario" >-->
<button type="button" class="btn btn-danger btn-lg" onclick="location.href='cadastro_aluno.php'" value="Resetar Formulario" >
  <span class="glyphicon glyphicon-erase" aria-hidden="true" ></span> Limpar Campos
</button>

</form>

<!-- RESET DO FORMULARIO ACIMA COM O BOTÃO LIMPAR CAMPOS NOTA: ALTERADO O RESET COMO REFRESH DA PÁGINA POR CONTA DO $_POST-->
<script>
function limparFormulario() {
    document.getElementById("form_cadastro").reset();
}
</script>

<!-- JS MASCARA DE FORMULARIO BOOTSTRAP -->
<SCRIPT>

// test on mobile
$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1" />');

// bootstrap-select
$('select').selectpicker({
  mobile: false
});

// inpu mtasking
$('.mask-date').mask("00/00/0000", {
  placeholder: "__-__-____"
});
$('.mask-money').mask('000.000.000.000.000,00', {
  reverse: true
});

// custom checkbox and radio
$('input').iCheck({
  checkboxClass: 'icheckbox_square-blue',
  radioClass: 'iradio_square-blue'
});
</SCRIPT>

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
