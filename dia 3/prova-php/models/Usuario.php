<?php
require_once __DIR__ . '/../config/banco.php';

class Usuario {
    
    // Autentica usuário - Login
    public static function authenticate($username, $password): bool {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("select * from usuarios where nome_usuario=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $dados = $result->fetch_assoc();

        if(password_verify($password,$dados['senha'])){
            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['user_id'] = $dados['id'];

            return true;
        }



        return false;
    }
    
}
?>