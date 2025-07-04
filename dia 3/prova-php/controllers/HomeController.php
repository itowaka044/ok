<?php

require_once __DIR__ . '/../models/Usuario.php';
require_once 'security\CsrfToken.php';

class HomeController {

    public static function login() {

        if($_SERVER['REQUEST_METHOD']=='POST'){
            
            if(!isset($_SESSION)){
                session_start();
            }

            if(!CsrfToken::validarToken('login', $_POST['csrf_token'])){
                die('token invalido');
            }

            if(Usuario::authenticate($_POST['username'],$_POST['password'])){

                header("Location: fornecedores");
                die();
            }
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