<?php
 //Faça um script PHP para somar os números pares < 100
    $soma = 0;
    for($n=0;$n<=100;$n++){
        if($n % 2 == 0){
            $soma = $soma + $n;
        }
    }
    echo " A soma dos números são: " .$soma;
?>