<?php

session_start();
unset($_SESSION['email']);
unset($_SESSION['senha']);
header('Location: tela-de-login.php');

?>