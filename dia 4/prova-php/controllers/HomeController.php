<?php

require_once __DIR__ . '/../models/Usuario.php';

class HomeController {

    public static function login() {

        if(!isset($_SESSION)){
            session_start();
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if(Usuario::authenticate($user,$pass)){
                
                header("Location: fornecedores");
                die();
            }

            die("erro ao logar");

        }


        require __DIR__ . '/../views/login.php';
    }

    public static function logout() {

        if(!isset($_SESSION)){
            session_start();
        }

        if(isset($_SESSION['user_id'])){
            $_SESSION['user_id'] = null;
        }

        header('Location: login');
    }
    
}
?>