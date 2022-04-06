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
            
            // print_r($sql);
            // print_r('<br>');
            // print_r($result);

            if(mysqli_num_rows($result) < 1){
               //print_r('Não existe');
               header('Location: tela-de-login.php');
            }
            else{
               //print_r('Existe');

               header('Location: sistema.php');
            }
    }
    else
    {
        // Acessa
        header('Location: tela-de-login.php');
    }
