<?php

require_once __DIR__ . '/../models/Usuario.php';

class HomeController {

    public static function login() {

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = $_POST['username'];
            $pass = $_POST['password'];

            $autenticado = Usuario::authenticate($user, $pass);

            if(!isset($_SESSION)){
                session_start();
            }

            if($autenticado){
                header('Location: fornecedores');
                die();
            }

            echo "erro ao logar";

        }

        require __DIR__ . '/../views/login.php';
    }

    public static function logout() {
        header('Location: login');
    }
    
}
?>