<?php
    include('conexao.php');
    $id_usuario = $_GET['id_agenda'];
    $sql = 'SELECT * FROM usuario where id_agenda ='.$id_agenda;
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
    <form method="POST" action="cadastro_agenda_exe.php">
        <fieldset>
        <div id="centro">
                <label for="nome">Nome:</label>
                <input name="nome" type="text" id="nome" placeholder="Digite o Nome"><br></br>
            </div>
            <div id="centro">
                <label for="apelido">Apelido:</label>
                <input name="apelido" type="text" id="apelido" placeholder="Digite o Apelido"><br></br>
            </div>
            <div id="centro">
                <label for="endereco">Endereço:</label>
                <input name="endereco" type="text" id="endereco" placeholder="Digite o Endereço"><br></br>
            </div>
            <div id="centro">
                <label for="bairro">Bairro:</label>
                <input name="bairro" type="text" id="bairro" placeholder="Digite o Bairro"><br></br>
            </div>
            <div id="centro">
                <label for="cidade">Cidade:</label>
                <input name="cidade" type="text" id="cidade" placeholder="Digite a Cidade"><br></br>
            </div>
            <div id="centro">
                <label for="estado">Estado:</label>
                <input name="estado" type="text" id="estado" placeholder="Digite o Estado"><br></br>
            </div>
            <div id="centro">
                <label for="telefone">Telefone:</label>
                <input name="telefone" type="text" id="telefone" placeholder="Digite o Telefone"><br></br>
            </div>
            <div id="centro">
                <label for="celular">Celular:</label>
                <input name="celular" type="text" id="celular" placeholder="Digite o Celular"><br></br>
            </div>
            <div id="centro">
                <label for="email">E-mail:</label>
                <input name="email" type="text" id="email" placeholder="Digite o E-mail"><br></br>
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