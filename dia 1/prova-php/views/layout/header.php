<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Gerenciamento</title>
    <link rel="stylesheet" href="/prova-php/assets/style.css">
</head>
<body>
<header style="border-radius: 8px">
    <a href="/prova-php/">
        <img src="/prova-php/assets/img/profile/prof-3.jpg" style="border-radius: 50%;" alt="Usuário" width="50">
    </a>
    <nav>
        <ul>

            <li>

            <?php

                if(!isset($_SESSION)){
                    session_start();
                }



                if(isset($_SESSION["user_id"])){
                    echo "<P>logado</P>";
                } else {
                    echo "<P>não logado</P>";
                }

            ?>

            </li>
            <li><a href="/prova-php/fornecedores">Fornecedores</a></li>
            <li><a href="/prova-php/logout">Logout</a></li>
        </ul>
    </nav>
</header>
<div class="container">