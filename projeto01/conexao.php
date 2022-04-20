<?php
    $hostname = "localhost";
    $port = 3307;
    $username = "root";
    $password =  "";
    $database = "projeto01";
    $con = mysqli_connect($hostname, $port, $username, $password, $database);
    
    if (mysqli_connect_errno()){
        printf("Erro ao conectar ao banco de dados: %s\n", mysqli_connect_error());
        exit;
    }
    printf("Banco de daos conectado com sucesso \o/");
?>