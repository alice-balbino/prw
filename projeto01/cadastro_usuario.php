<?php
    include("conexao.php");
   $nome_usuario = $_POST['nome_usuario'];
   $email_usuario= $_POST['email_usuario'];
   $fone_usuario = $_POST['fone_usuario'];
    echo "Cadastro de usuário:";
    echo "<p>Nome: ".$nome_usuario;
    echo "<p>email: ".$email_usuario;
    echo "<p>telefone: ".$fone_usuario;

?>