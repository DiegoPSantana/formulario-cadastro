<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['tel']);
        // print_r('<br>');
        // print_r('Sexo:' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de Nascimento:' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado :' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        // Se caso exibiu na tela do seu navegador vamos passar
        // para o próximo passo

        // Passando dados para o banco de dados
        include_once('config.php');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $telefone = $_POST['tel'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, telefone, sexo, data_nasc, cidade, estado, endereco) 
        VALUES ('$name', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
    }

    // Dados incluidos do cadastro finalizado

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/estilo.css">
    <title>Formulário de Cadastro</title>
    <style>
        

    </style>
</head>
<body>
    <div class="box">
        <form action="Formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Cadastro</b></legend>
                
                <br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
               <br><br> 
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="tel" id="tel" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                
                <p>Sexo: </p>
                <input type="radio" id="femenino" name="genero" value="femenino" required>
                <label for="femenino">Feminino</label> 
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br><br>
                    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                    <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit"> 

            </fieldset>
        </form>
    </div>
    
</body>
</html>