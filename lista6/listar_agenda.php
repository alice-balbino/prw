<?php
        include('conexao.php');
        $sql = 'SELECT * FROM agenda';
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
    <h1  align="center">Listagem de Contatos</h1>
        <table align="center" border="1" width=1000>
            <!-- tr>th*4 --> 
            <tr>
                <th>Código</th>
                <th>Nome</th>
                <th>Apelido</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Excluir</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<th>". $row['id_agenda'] ."</th>";
                    echo "<td><a href='altera_agenda.php?id_agenda=".$row['id_agenda']."'>".$row['nome'] ."</a></td>";
                    echo "<th>". $row['apelido'] ."</th>";
                    echo "<th>". $row['endereco'] ."</th>";
                    echo "<th>". $row['bairro'] ."</th>";
                    echo "<th>". $row['cidade'] ."</th>";
                    echo "<th>". $row['estado'] ."</th>";
                    echo "<th>". $row['telefone'] ."</th>";
                    echo "<th>". $row['celular'] ."</th>";
                    echo "<th>". $row['email'] ."</th>";
                    echo "<td><a href='excluir_agenda.php?id_agenda=".$row['id_agenda']."'>Excluir</a></td>";
                    echo "</tr>";
                }
            ?>

        </table>
</body>
</html>