<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sge Tarso - Cadastro Interno</title>
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
  					  <li class="active">Area de Cadastros</li> 
					</ol>

					
                        <h1>Area de Cadastros</h1>
                        <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Abrir Menu</a>
<br>
<br>
          <ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="cadastro_usuario.php">Cadastro Usuario SGE</a></li>
  <li role="presentation"><a href="CADASTRO_ALUNO.PHP">Cadastro de Aluno</a></li>
  <li role="presentation"><a href="CADASTRO_PROFESSOR.PHP">Cadastro de Professor</a></li>
  </ul>
   <ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="cadastro_turma.php">Cadastro de Turma</a></li>
  <li role="presentation"><a href="cadastro_materia.php">Cadastro de Materia</a></li>
  <li role="presentation"><a href="cadastro_escola.php">Cadastro de Escola</a></li>
</ul>
   <ul class="nav nav-pills nav-justified">
  <li role="presentation"><a href="cadastro_curso.php">Cadastro de Curso</a></li>

</ul>

<br>
						<div class="input-group">
						


					
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
