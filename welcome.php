<?php
session_start();

if (empty($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

if (!empty($_COOKIE['tema'])) {
    if ($_COOKIE['tema'] == "escuro") {
        $tema = $_COOKIE['tema'];
        $body = "newStyle";
        $a = "aNewStyle";
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
        .newStyle {
            background-color: #292929;
            color: #ccc;
        }

        .aNewStyle {
            text-decoration: none;
            color: #ccc;
        }
    </style>
</head>

<body class=<?= $body ?? "" ?>>
    <h1>Bem vindo: <?= $_SESSION['username'] ?></h1>
    <p>Tema escolhido: <?= $tema ?? '' ?></p>

    <a href="logout.php" class=<?= $a ?? "" ?>>Fazer logout</a>
</body>

</html>