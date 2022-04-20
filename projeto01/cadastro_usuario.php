<?php
    include('conexao.php');
   $nome_usuario = $_POST['nome_usuario'];
   $email_usuario= $_POST['email_usuario'];
   $fone_usuario = $_POST['fone_usuario'];

    echo "<p>Nome: ".$nome_usuario;
    echo "<p>email: ".$email_usuario;
    echo "<p>telefone: ".$fone_usuario;

    $sql = "INSERT INTO usuario ('nome_usuario', 'email_usuario', 'fone_usuario')
            VALUES ('".$nome_usuario."','".$email_usuario."','".$fone_usuario."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "Dados inseridos com sucesso";
    else
    echo "Erro ao inserir banco de dados: ".mysqli_error($con);

?>