<!-- Inserts utilizados para cadastrar usuario no sistema-->
<!-- Em conjunto com o arquivo cadastro_usuario.php -->
<?php
$sql = "INSERT INTO Usuario (usu_nome, usu_login, usu_senha, usu_email, usu_nascimento, usu_idade, usu_sexo)
    VALUES ('$nome','$login','$senha','$email','$nascimento','$idade','$sexo')";
	if ($conexao->query($sql) === TRUE) {
	//Caso o insert seja com sucesso, adicionar este aviso ao HTML
      echo "<div class='alert alert-success' role='alert'>Usuario cadastrado com sucesso!!</div>";
			}
			//CAMPO COMENTADO PARA PARAR A EXIBIÇÃO DE ERROS AO CARREGAR A PAGINA PELA PRIMEIRA VEZ
          else {
			    echo "<p class='bg-danger mensagem'>Error: " . $sql . "<br>" . $conexao->error ."</p>";
			}
            ?>
