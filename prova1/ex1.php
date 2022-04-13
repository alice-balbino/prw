<?php
    /*P que calcule e imprima o salário reajustado de um
    funcionário de acordo com a seguinte regra:
        • Salários até 300, reajuste de 50%
        • Salários maiores que 300, reajuste de 30%
    */
//$salCinco = salário reajustado a 50%
//$salTres = salário reajustado a 30%

    $salario = 100;

    if($salario <= 300){
        $salCinco = ($salario / 100 )*5;
        $salnovoC = $salario + $salCinco;
        echo $salnovoC;
    }

    if ($salario > 300){
        $salTres = ($salario / 100 )*3;
        $salnovoT = $salario + $salTres;
        echo $salnovoT;
    }

?>