<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            /* background-image: linear-gradient(45deg, cyan, yellow); */
            background-image: linear-gradient(to right, rgb(20,147, 220), rgb(17,54,71));
        }
        .tela-login{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            border-radius: 15px;
            color: white;
        }

        .nome{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
        }
        .senha{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 15px;
        }

        .enviar{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .enviar:hover{
            background-color: deepskyblue;
        }


    </style>
</head>
<body>

<div class="tela-login">
    <h1>Login</h1>

    <input type="text" placeholder="Nome" class="nome">
    <br> <br>
    <input type="password" placeholder="Senha" class="senha">
    <br> <br>
    <button class="enviar">Enviar</button>
</div>
    
</body>
</html>