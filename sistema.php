<?php
session_start();
//print_r($_SESSION);

// Se estiver logado na minha sessão o email e senha tal
// iremos matar a sessão para questão de segurança
// assim enviando usuário para refazer o login

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Sistema</title>
  <style>
    body {
      background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
      color: white;
      text-align: center;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Parabéns você está dentro do Site</a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    </div>
    <div class="d-flex">
      <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </nav>
  <br>
  <?php
  echo "<h1> Bem vindo <u>$logado</u></h1>";
  ?>
</body>

</html>