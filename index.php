<?php 
session_start();
if(isset($_SESSION['username'])){
    header("Location: welcome.php");
    exit();
}

$error = '';
if(isset($_GET['error'])) {
    if($_GET['error'] == 'invalid') {
        $error = "Usuario ou senha invalidos";
    }
    else if($_GET['error'] == 'empty') {
        $error = "Os campos de usuario e senha estão vazios";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            padding: 20px;
            width: 25vw;
            border: 5px solid #CCC;
            border-radius: 25px;
        }

        .box-input {
            display: flex;
            flex-direction: column;
            margin-bottom:10px
        }
    </style>
</head>
<body>
    <h1>Formulario</h1>

    <form action="login.php" method="POST">
        <div class="box-input">
            <label for="username">Usuario</label>
            <input type="text" name="username" id="username" />
        </div class="box-input">
        <div class="box-input">
            <label for="password">Senha</label>
            <input type="text" name="password" id="password">
        </div>
        <div class="box-input">
            <label for="tema">Tema Preferido</label>
            <select name="tema" id="tema">
                <option value="escuro">escuros</option>
                <option value="claro">claro</option>
            </select><br/>
        </div>
        <p style="color: red;"><?= $error ?></p>
        <input type="submit" value="login">
        
    </form>

</body>

</html>