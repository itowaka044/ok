<?php


    class CsrfToken{
        

        public static function gerarToken($nomeForm){
            if(!isset($_SESSION)){
                session_start();
            }

            $token = bin2hex(random_bytes(32));

            $_SESSION['csrf_tokens'][$nomeForm] = $token;

            return $token;
        }

        public static function validarToken($nomeForm,$token){
            if(!isset($_SESSION)){
                session_start();
            }

            return isset($_SESSION['csrf_tokens'][$nomeForm]) && hash_equals($_SESSION['csrf_tokens'][$nomeForm], $token);
            
        }
    }


?>