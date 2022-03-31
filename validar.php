
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