<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];

    $sql = 'DELETE FROM agenda WHERE id_agenda='.$id_agenda;
    echo "<h1> Exclusão de Usuário </h1>";
    $result = mysqli_query($con, $sql);

    if($result)
        echo "Registro excluído com sucesso<br>";
    else 
        echo "Erros ao tentar excluir usuário: ".mysqli_error($con). "<br>";

?>
<a href='listar_agenda.php'>Voltar</a>