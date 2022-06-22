<?php
    include('conexao.php');
   
   $data = $_POST['data'];
   $tipo = $_POST['tipo'];
   $valor= $_POST['valor'];
   $historico= $_POST['historico'];
   $cheque= $_POST['cheque'];
 
    echo "<p>Data: ".$data;
    echo "<p>Tipo: ".$tipo;
    echo "<p>Valor: ".$valor;
    echo "<p>Historico: ".$historico;
    echo "<p>Cheque: ".$cheque;

    $sql = "INSERT INTO fluxo_caixa (date, tipo, valor, historico, cheque)
            VALUES ('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";

    $result = mysqli_query($con, $sql);
    if($result)
        echo "<br>"."Dados inseridos com sucesso";
    else
    echo "Erro ao inserir banco de dados: ".mysqli_error($con);
//plç
?>
<br><br><a href='cadastro_fluxo_caixa.html'> Voltar</a>