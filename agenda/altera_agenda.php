<?php
    include('conexao.php');
    $id_agenda = $_GET['id_agenda'];
    $sql = 'SELECT * FROM agenda where id_agenda ='.$id_agenda;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>cadastro</title>
</head>
<body>
<h2>Alteração de Contato</h2>
    <form method="POST" action="altera_agenda_exe.php">
        <fieldset>
        <div id="centro">
                <label for="nome">Nome:</label>
                <input name="nome" type="text" id="nome" value="<?php echo $row['nome']?>"><br></br>
            </div>
            <div id="centro">
                <label for="apelido">Apelido:</label>
                <input name="apelido" type="text" id="apelido" value="<?php echo $row['apelido']?>" ><br></br>
            </div>
            <div id="centro">
                <label for="endereco">Endereço:</label>
                <input name="endereco" type="text" id="endereco" value="<?php echo $row['endereco']?>"><br></br>
            </div>
            <div id="centro">
                <label for="bairro">Bairro:</label>
                <input name="bairro" type="text" id="bairro" value="<?php echo $row['bairro']?>"><br></br>
            </div>
            <div id="centro">
                <label for="cidade">Cidade:</label>
                <input name="cidade" type="text" id="cidade" value="<?php echo $row['cidade']?>"><br></br>
            </div>
            <div id="centro">
                <label for="estado">Estado:</label>
                <input name="estado" type="text" id="estado" value="<?php echo $row['estado']?>"><br></br>
            </div>
            <div id="centro">
                <label for="telefone">Telefone:</label>
                <input name="telefone" type="text" id="telefone" value="<?php echo $row['telefone']?>"><br></br>
            </div>
            <div id="centro">
                <label for="celular">Celular:</label>
                <input name="celular" type="text" id="celular" value="<?php echo $row['celular']?>"><br></br>
            </div>
            <div id="centro">
                <label for="email">E-mail:</label>
                <input name="email" type="text" id="email" value="<?php echo $row['email']?>"><br></br>
                </div>
            </div>
            <br>
            <div id="botao">            
                <button  type="submit">Enviar</button>
                <!--<a href='index.php'>Voltar</a>-->
            </div>
            <input name="id_agenda" type="hidden" value="<?php echo $row['id_agenda']?>">
        </fieldset>
    </form>    
</body>
</html>