<?php
/*Obtém a quantidade de caracteres de uma string eliminando os
espaços iniciais e finais.*/
    $palavra = "Ciência da Computação";
    echo " A variável contém: " .strlen($palavra). "caracteres" . "<br>";
    $palavra = trim($palavra);
    echo "A variável agora contém: " .strlen($palavra). "caracteres";
    
?>