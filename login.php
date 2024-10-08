<?php
session_start();
//Login and password
if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    if ($username == 'admin' && $password == 'admin') {
        /**Definindo uma session
         * A Session só sera definida se o username e senha estiveram corretos
         */
        $_SESSION['username'] = $username;

        //Definindo um cookie
        if(!empty($_POST['tema'])) {
            setcookie('tema', $_POST['tema']);
        }
        
        //Redirecionando a pagina
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: index.php?error=invalid");
        exit();
    }
} else {
    header("Location: index.php?error=empty");
    exit();
}
