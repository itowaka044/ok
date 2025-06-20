<?php

require_once __DIR__ . '/../models/Usuario.php';

class HomeController {

    public static function login() {

        
        require_once __DIR__ . '/../views/login.php';

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];

            if(!isset($_SESSION)){
                session_start();
            }

            try{

                $autenticado = Usuario::authenticate($username, $password);

                if($autenticado == true){
                    header("Location: fornecedores");
                    exit();
                }

            }catch(Exception $ex){
                echo "erro: " . $ex->getMessage() . "<br>";
            }



        }


    }

    public static function logout() {

        session_start();

        $_SESSION["logado"] = false;

        header("Location: login.php");
        exit();
    }

    
}
?>