<?php

 //print_r($_REQUEST);  // Para visualizar no navegador os dados digitados

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
            //Acessa
            include_once('config.php');
            $email = $_POST['email'];
            $senha = $_POST['senha'];

               // Para visualizar se os dados estão chegando 
            print_r('Email: ' . $email);
            print_r('<br>');
            print_r('Senha: ' . $senha);
            
    }
    else
    {
        // Acessa
        header('Location: tela-de-login.php');
    }
