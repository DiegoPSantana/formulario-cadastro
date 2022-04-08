<?php
session_start();
print_r($_SESSION);

// Se estiver logado na minha sessão o email e senha tal
// iremos matar a sessão para questão de segurança
// assim enviando usuário para refazer o login

if ((!isset($_SESSION['emial']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: tela-de-login.php');

    // Caso caia nessa função ele matará a sessão e retornar a pagina de login
}

// Agora se você estiver logado ele vai continuar logado
// Para que sessão seja fechada você tem que fechar o navagador
// que cairá na função acima, onde vai para a pagina de login
$logado = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>

<body>
    <h1>Parabéns você acessou o sistema com sucesso !</h1>
</body>

</html>