<?php
require_once 'controles/conexao_banco.php';
//$sql_select = ("SELECT * FROM usuario");
//$sql_select = ("SELECT * FROM usuario WHERE (VERIFICAR COMO SELECIONAR A COLUNA) LIKE %'$pesquisa'% ORDER BY usu_id asc");
$sql_select = ("SELECT * FROM usuario ORDER BY usu_id asc");

$result = $conexao->query($sql_select);
if ($result->num_rows > 0) {
    
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["usu_id"]. " - Nome: " . $row["usu_nome"]. " - Login " . $row["usu_login"]. "<br>";
        echo "<table class='table'>";
        echo "<thead> ";
        echo "<tr> ";
        echo "<th>ID</th>"; //COLUMN 1 ID 
        echo "<th>Nome do Usuario</th>"; // COLUMN 2 NOME 
        echo "<th>Login</th>"; // COLUMN 3 LOGIN 
        echo "<th>Senha</th>"; // COLUMN 4 SENHA 
        echo "<th>E-mail</th>"; // COLUMN 5 E-MAIL 
        echo "<th>Sexo</th>"; // COLUMN 6 SEXO 
        echo "<th>Data de Nascimento</th>"; // COLUMN 7 DATA NASCIMENTO 
        echo "<th>Idade</th>";// COLUMN 8 IDADE 
        echo "</tr> ";
        echo "</thead> ";
        echo "<tbody> ";

        // Qual deixar?
        echo "<tr>";
            //$indexx = 0;
            //$indexx ++;
            //echo "<th scope='row'>" . $indexx . "</th>"; //COLUMN  
            echo "<th>" . $row['usu_id'] . "</th>"; //COLUMN 1 ID 
            echo "<th>" . $row['usu_nome'] . "</th>"; // COLUMN 2 NOME 
            echo "<th>" . $row['usu_login'] . "</th>"; // COLUMN 3 LOGIN 
            echo "<th>" . $row['usu_senha'] . "</th>"; // COLUMN 4 SENHA 
            echo "<th>" . $row['usu_email'] . "</th>"; // COLUMN 5 E-MAIL 
            //if ($row['usu_sexo']) == 0 {
            //    echo "<th> Masculino </th>"; // COLUMN 6 SEXO 
            //}
            //if ($row['usu_sexo']) == 1 {
            //    echo "<th> Feminino </th>"; // COLUMN 6 SEXO 
            //}
            //else {
            //     echo "<th>Indefinido</th>"; // COLUMN 6 SEXO
            //}
            echo "<th>" . $row['usu_sexo'] . "</th>"; // COLUMN 6 SEXO 
            echo "<th>" . $row['usu_nascimento'] . "</th>"; // COLUMN 7 DATA NASCIMENTO 
            echo "<th>" . $row['usu_idade'] . "</th>";// COLUMN 8 IDADE 
            echo "</tr>";
        //
        
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            //$indexx = 0;
            //$indexx ++;
            //echo "<th scope='row'>" . $indexx . "</th>"; //COLUMN  
            echo "<th>" . $row['usu_id'] . "</th>"; //COLUMN 1 ID 
            echo "<th>" . $row['usu_nome'] . "</th>"; // COLUMN 2 NOME 
            echo "<th>" . $row['usu_login'] . "</th>"; // COLUMN 3 LOGIN 
            echo "<th>" . $row['usu_senha'] . "</th>"; // COLUMN 4 SENHA 
            echo "<th>" . $row['usu_email'] . "</th>"; // COLUMN 5 E-MAIL 
            //if ($row['usu_sexo']) == 0 {
            //    echo "<th> Masculino </th>"; // COLUMN 6 SEXO 
            //}
            //if ($row['usu_sexo']) == 1 {
            //    echo "<th> Feminino </th>"; // COLUMN 6 SEXO 
            //}
            //else {
            //     echo "<th>Indefinido</th>"; // COLUMN 6 SEXO
            //}
            echo "<th>" . $row['usu_sexo'] . "</th>"; // COLUMN 6 SEXO 
            echo "<th>" . $row['usu_nascimento'] . "</th>"; // COLUMN 7 DATA NASCIMENTO 
            echo "<th>" . $row['usu_idade'] . "</th>";// COLUMN 8 IDADE 
            echo "</tr>";
        }
        echo "</tbody> ";
        echo "</table> ";
    }
} else {
    echo "0 results";
}

$conexao->close();

echo "Numero total de linhas: $result->num_rows";

//$result = mysqli_query($con,"SELECT * FROM Persons");

//echo "<table border='1'>
//<tr>
//<th>Firstname</th>
//<th>Lastname</th>
//</tr>";
//
//while($row = mysqli_fetch_array($result))
//{
//echo "<tr>";
//echo "<td>" . $row['FirstName'] . "</td>";
//echo "<td>" . $row['LastName'] . "</td>";
//echo "</tr>";
//}
//echo "</table>";
//
//mysqli_close($con);



?>