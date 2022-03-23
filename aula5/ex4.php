<?php
    /*faça um script PHP que a partir 
    de três números $n1, $n2 e $n3 
    mostre eles na ordem decrescente.
    */
        $n1 = 10;
        $n2 = 5;
        $n3 = 25;

        if($n1 > $n2 && $n1 > $n3){
            if($n2 > $n3){ 
                echo $n1." " .$n2." " .$n3;
            }
            else{
                echo $n1." " .$n3." " .$n2;
            }
        }

        if($n2 > $n1 && $n2 > $n3){
            if($n1 > $n3){ 
                echo $n2." " .$n1." " .$n3;
            }
            else{
                echo $n2." " .$n3." " .$n1;
            }
        }

        if($n3 > $n1 && $n3 > $n2){
            if($n1 > $n2){ 
                echo $n3." " .$n1." " .$n2;
            }
            else{
                echo $n3." " .$n2." " .$n1;
            }
        }
?>