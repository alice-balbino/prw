<?php
    /*Um número é, por definição, primo se ele não tem divisores,
    exceto 1 e ele próprio. Preparar um script PHP para verificar
    números entre 0 e 200 e determinar se cada um dele é primo ou
    não.*/

    $num = 36;//pode colocar qualquer número entre 0-200
    $div = $num / 1;
    $divele = $num / $num;

    
        if($div == $num & $divele == 1){
            echo "O número ".$num." é primo";
        }
        else{
            echo "O número ".$num." não é primo";
        }
?>