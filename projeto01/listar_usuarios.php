<?php
        include('conexao.php');
        $sql = 'SELECT * FROM usuario';
        //result: retorna todos os dados da consulta
        $result = mysqli_query($con, $sql);
        //print_r($row); -> era pra ver se estava funcionando
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Listagen de Usuários</title>
    <link rel="stylesheet" href="estilo_usuario.css">
</head>
<body>
    <h1>Listagem de Usuários</h1>
        <table align="center" border="1" width=500>
            <!-- tr>th*4 --> 
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<th>". $row['id_usuario'] ."</th>";
                    echo "<td><a href='altera_usuario.php?id_usuario=".$row['id_usuario']."'>".$row['nome_usuario'] ."</a></td>";
                    echo "<th>". $row['email_usuario'] ."</th>";
                    echo "<th>". $row['fone_usuario'] ."</th>";
                    echo "</tr>";
                }
            ?>

        </table>
</body>
</html>