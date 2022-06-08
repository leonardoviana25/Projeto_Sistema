<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_teste';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if ($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }

    // else
    // {
    //      echo "Banco conectado com sucesso!!";
    // }
?>