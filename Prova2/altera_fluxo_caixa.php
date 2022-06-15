<?php
    include('conexao.php');
    $id_fluxo_caixa = $_GET['id'];
    $sql = 'SELECT * FROM Prova2 where id ='.$id;
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_cadastro.css">
    <title>cadastro</title>
</head>
<body>
    <h2>Cadastro de Fluxo de Caixa</h2>
    <form method="POST" action="altera_fluxo_caixa_exe.php" enctype='multipart/form-data'>
        <fieldset>
            <div id="centro">
                <label for="data">Data:</label>
                <input name="data" type="date" id="data" placeholder="Digite a data"><br></br>
            </div>
            <div id="centro">
                <label for="tipo">Tipo:</label>
                <input type="radio" name="tipo" id="tipo" value="entrada">Entrada</label>
                <input type="radio" name="tipo" id="tipo" value="saida">Saída</label><br></br>
            </div>
            <div id="centro">
                <label for="valor">Valor:</label>
                <input name="valor" type="text" id="valor" placeholder="Digite o valor"><br></br>
            </div>
            <div id="centro">
                <label for="historico">Histórico:</label>
                <input name="historico" type="text" id="historico" placeholder="Digite o historico"><br></br>
            </div>
            <div id="centro">
                <label for="tipo">Cheque:</label>
                <select name="cheque" id="cheque">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>

               <input name='id' type='hidden' value='<?php echo $row['id']?>'>

            <br>
            <div id="botao">            
                <button  type="submit">Enviar</button>
            </div>
            </fieldset>
    </form>    
</body>
</html>