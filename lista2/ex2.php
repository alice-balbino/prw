<?php
   /* Faça um script PHP que leia um número que represente um
    determinado mês do ano. Após a leitura escreva por extenso qual
    o mês lido. Caso o número digitado não esteja na faixa de 1 .. 12
    escreva uma mensagem informando o usuário do erro da
    digitação.*/ 

    $nMes = 1;
    switch ($nMes) {
        case 1:
            echo "Janeiro";
            break;
        case 2:
            echo "Fevereiro";
            break;
        case 3:
            echo "Março";
            break;
        case 4:
            echo "Abril";
            break;
        case 5:
            echo "Maio";
            break;
        case 6:
            echo "Junho";
            break;
        case 7:
            echo "Julho";
            break;
        case 8:
            echo "Agosto";
            break;
        case 9:
            echo "Setembro";
            break;
        case 10:
            echo "Outubro";
            break;
        case 11:
            echo "Novembro";
            break;
        case 12:
            echo "Dezembro";
            break;

    }


?>