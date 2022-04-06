<?php

 //print_r($_REQUEST);  // Para visualizar no navegador os dados digitados

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
            //Acessa
            include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

               // Para visualizar se os dados estão chegando 
            // print_r('Email: ' . $email);
            // print_r('<br>');
            // print_r('Senha: ' . $senha);

            // Verificar se os parametros existem no banco de dados
            $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

            $result = $conexao->query($sql);
            
            print_r($sql);
            print_r('<br>');
            print_r($result);
    }
    else
    {
        // Acessa
        header('Location: tela-de-login.php');
    }
