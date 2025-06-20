<?php
require_once __DIR__ . '/../config/banco.php';

class Usuario {
    
    // Autentica usuário - Login
    public static function authenticate($username, $password) {
        $banco = Banco::getConn();

        $state = $banco->prepare("select * from usuarios where nome_usuario = ?");

        $state->bind_param("s", $username);

        $state->execute();
        
        $result = $state->get_result();

        $dados = $result->fetch_assoc();

        if(password_verify($password, $dados["senha"])){

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user_id'] = $dados["id"];

            return true;
        } else{
            return false;
        }
    }
    
}
?>