<?php

$loginDig = $_POST['login'];
$senhaDig = MD5($_POST['senha']);

$usuario = array ("Alice" => "123",
                   "Laura" =>"456",
                   "Tiva" => "789");

if(array_key_exists($loginDig, $senhaDig))
{
    if($usuario[$loginDig]== $senhaDig)
    {
        echo "Acesso permitido";
    }
    else{
        echo "Acesso negado";
    }
}
else {
    echo "Usuário não cadastrado"
}

?>