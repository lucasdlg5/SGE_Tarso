<?php

require_once 'conexao_banco.php';
    // Variaveis da pagina signin.php
    $login = $_POST['email_login'];
    $senha = $_POST['senha_login'];
    $btn_login = $_POST ['entrarBtn'];
   if (isset($btn_login)) {
      $sql = "SELECT * FROM usuario WHERE usu_email = '$login' && usu_senha = '$senha'";
      if ($verifica = mysqli_query($conexao,$sql)){
        if (mysqli_num_rows($verifica)<=0){
        echo "<br>";
          echo "Nao foi encontrado nenhum registro com estes dados";
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../signin.php';</script>";
          die();
        }
          else{
          setcookie("login",$login);
          header("Location:../dashboard.php");
        }
    }
    }
?>