<?php
    /*Crie um script em PHP a em que a partir do seu CEP. Capture
    apenas os 3 últimos números e exiba-o.*/

    $cpf = 32165498712;
    $novocpf = substr($cpf,8,11);
    echo $novocpf;
?>