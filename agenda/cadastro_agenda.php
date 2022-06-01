<?php
    include('conexao.php');

    //upload da foto 
    $fotoNome = $_FILES['foto']['name'];
    //salvar foto
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
     // Selecionar file type
     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
     // validar file extensions
     $extensions_arr = array("jpg","jpeg","png","gif");

    // Checar extension
    if( in_array($imageFileType,$extensions_arr) ){        
        // Upload file
        if(move_uploaded_file($_FILES['foto']['tmp_name'],$target_dir.$fotoNome)){
            $fotoBlob = addslashes(file_get_contents($target_dir.$fotoNome));
            //fotoBlob -> foto em binário
        }
    }

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