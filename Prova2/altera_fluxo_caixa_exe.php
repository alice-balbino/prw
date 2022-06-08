<?php
    include('conexao.php');


    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor= $_POST['valor'];
    $historico= $_POST['historico'];
    $cheque= $_POST['cheque'];
    
    $sql = "UPDATE agenda SET
          echo "<p>Data: ".$data;
        echo "<p>Tipo: ".$tipo;
        echo "<p>Valor: ".$valor;
        echo "<p>Historico: ".$historico;
        echo "<p>Cheque: ".$cheque;
    
    $result = mysqli_query($con, $sql);
	if($result)
		echo "Dados alterados com sucesso <br>";
	else
		echo "Erro ao alterar no banco de dados: ".mysqli_error($con)."<br>";
  
?>
<a href='index.php'> Voltar</a>