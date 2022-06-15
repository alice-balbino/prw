<?php
        include('conexao.php');
        $sql = 'SELECT * FROM fluxo_caixa';
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
    <h1  align="center">Listagem</h1>
        <table align="center" border="1" width=1500>
            <!-- tr>th*4 --> 
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Cheque</th>
                <th>Excluir</th>
            </tr>

            <?php
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<th><a href='altera_fluxo_caixa.php?id_usuario=".$row['id']."'>". $row['id'] ."</th>";
                    echo "<th>". $row['data'] ."</th>";
                    echo "<th>". $row['tipo'] ."</th>";
                    echo "<th>". $row['valor'] ."</th>";
                    echo "<th>". $row['historico'] ."</th>";
                    echo "<th>". $row['cheque'] ."</th>";
                    echo "<td><a href='excluir_fluxo_caixa.php?id=".$row['id']."'>Excluir</a></td>";
                    echo "</tr>";
                }
            ?>

        </table>
</body>
</html>