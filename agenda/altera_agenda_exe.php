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

    $id_agenda = $_POST['id_agenda'];
    $nome = $_POST['nome'];
    $apelido = $_POST['apelido'];
    $endereco = $_POST['endereco'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $celular= $_POST['celular'];
    $email = $_POST['email'];
    $dt_cadastro=date("Y-m-d");
    
    
    echo "<h1> Alteração de dados </h1>";
    echo "<p> Nome Usuário: " . $nome . "<p>";
    
    //ver se alterou a foto
    if(strlen($fotoNome)){
      $sql = "UPDATE agenda SET
            nome='".$nome."',
            apelido='".$apelido."',
            endereco='".$endereco."',
            bairro='".$bairro."',
            cidade='".$cidade."',
            estado='".$estado."',
            telefone='".$telefone."',
            celular='".$celular."',
            email='".$email."',
            dt_cadastro='".$dt_cadastro."',
            foto_blob='".$fotoBlob."',
            foto_nome='".$fotoNome."'
          WHERE id_agenda=".$id_agenda;
    }

    else{
      $sql = "UPDATE agenda SET
      nome='".$nome."',
      apelido='".$apelido."',
      endereco='".$endereco."',
      bairro='".$bairro."',
      cidade='".$cidade."',
      estado='".$estado."',
      telefone='".$telefone."',
      celular='".$celular."',
      email='".$email."',
      dt_cadastro='".$dt_cadastro."'    
    WHERE id_agenda=".$id_agenda;
    }


    $result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>