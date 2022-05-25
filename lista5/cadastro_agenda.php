<?php
    include('conexao.php');
   $nome = $_POST['nome'];
   $apelido = $_POST['apelido'];
   $endereco= $_POST['endereco'];
   $bairro= $_POST['bairro'];
   $cidade= $_POST['cidade'];
   $estado = $_POST['estado'];
   $telefone = $_POST['telefone'];
   $celular = $_POST['celular'];
   $email= $_POST['email'];
   $dt_cadastro = date("Y-m-d");

    echo "<p>Nome: ".$nome;
    echo "<p>Apelido: ".$apelido;
    echo "<p>Endereço: ".$endereco;
    echo "<p>Bairro: ".$bairro;
    echo "<p>Cidade: ".$cidade;
    echo "<p>Estado: ".$estado;
    echo "<p>Telefone: ".$telefone;
    echo "<p>Celular: ".$celular;
    echo "<p>E-mail: ".$email;

    $sql = "INSERT INTO agenda (nome, apelido, endereco, bairro, cidade, estado, telefone, celular, email, dt_cadastro)
            VALUES ('".$nome."','".$apelido."','".$endereco."','".$bairro."','".$cidade."','".$estado."','".$telefone."','".$celular."','".$email."','".$dt_cadastro."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "<br>"."Dados inseridos com sucesso";
    else
    echo "Erro ao inserir banco de dados: ".mysqli_error($con);
//plç
?>