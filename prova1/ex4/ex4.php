<?php

    $nome;
    $estado;
    $cpf;
    $rg;
    $sexo;
    $saldo;
    $compra;

    if($saldo >= $compra){
        echo "Nome: ".$nome."<br>".
        "Estado: ".$estado."<br>".
        "CPF: ".$cpf."<br>"."RG: 
        ".$rg."<br>"."Sexo: ".$sexo. 
        "<br>"."Compra concluída!";
    }
    if($saldo < $compra){
        echo "Saldo Insuficiente para Concluir Compra!";
    }

?>