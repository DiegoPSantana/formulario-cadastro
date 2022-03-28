<?php

    $dbHost ="localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "formulario_cadastro";


    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexao efetuada com sucesso";
    // }
    
    // Caminho para o navegador localhost/formulario-cadastro/config.php
    // se conexão efetuada com sucesso podemos comentar esse cod. acima
    // se caso não conectado algo deu errado
?>