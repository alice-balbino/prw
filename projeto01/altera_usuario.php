<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = 'SELECT * FROM usuario where id_usuario ='.$id_usuario;
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
<h2>Alteração de Usuário - IFSP</h2>
    <form method="POST" action="cadastro_usuario_exe.php">
        <fieldset>
            <div id="centro">
                <label for="nome_usuario">Nome:</label>
                <input name="nome_usuario" type="text" id="nome_usuario" value="<?php echo $row['nome_usuario'] ?>" placeholder="Digite o nome"><br></br>
            </div>
            <div id="centro">
                <label for="email_usuario">E-mail:</label>
                <input name="email_usuario" type="text" id="email_usuario" value="<?php echo $row['email_usuario'] ?>" placeholder="Digite o e-mail"><br></br>
                </div>
            </div>
            <div id="centro">
                <label for="fone_usuario">Telefone:</label>
                <input name="fone_usuario" type="text" id="fone_usuario" value="<?php echo $row['fone_usuario'] ?>" placeholder="Digite o Telefone">
            </div>
            <br>
            <div id="botao">            
                <button  type="submit">Enviar</button>
                <!--<a href='index.php'>Voltar</a>-->
            </div>
            <input name="id_usuario" type="hidden" value="<?php echo $row['$id_usuario']?>">
            </fieldset>
    </form>    
</body>
</html>