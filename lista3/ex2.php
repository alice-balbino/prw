<?php
    /*Crie um script em PHP que pegue uma palavra contida em
    uma variável e substitua todas as vogais por X.
    */

    $palavra = "sempre";
    $palnova = str_replace("e","x", $palavra);
    echo "A palavra era: ".$palavra. "<br>"." Agora é: ".$palnova; 

?>