<?php
        /*  Criar um formulário para pedir o peso e altura de uma
            pessoa, efetuar o cálculo do IMC (Índice de Massa Corporal) e depois mostrar o resultado do cálculo e a
            mensagem de acordo com a tabela abaixo:
            É simples calcular o seu IMC, Por exemplo, se o seu peso é 80kg e a sua altura é 1,80m, a fórmula
            para calcular o IMC ficará:
                IMC = peso ÷ altura2
                IMC = 80 ÷ 1,802
                IMC = 80 ÷ 3,24
                IMC = 24,69
        */
    $peso;
    $altura;

    $imc = $peso /($altura * $altura );

    if($imc < 17){
        echo "O IMC é: ".$imc."<br>"."Situação: Muito abaixo do peso";
    }
    if($imc >= 17 & $imc <= 18.49){
        echo "O IMC é: ".$imc."<br>"."Situação: Abaixo do peso";
    }
    if($imc >= 18.5 & $imc <= 24.99){
        echo "O IMC é: ".$imc."<br>"."Situação: Peso normal";
    } 
    if($imc >= 25 & $imc <= 29.99){
        echo "O IMC é: ".$imc."<br>"."Situação: Acima do peso";
    }
    if($imc >= 30 & $imc <= 34.99){
        echo "O IMC é: ".$imc."<br>"."Situação: Obesidade 1";
    }
    if($imc >= 35 & $imc <= 39.99){
        echo "O IMC é: ".$imc."<br>"."Situação: Obesidade 2 -> severa ";
    }
    if($imc>=40) {
        echo "O IMC é: ".$imc."<br>"."Situação: Obesidade 3 -> Mórbida";
    }



?>