<?php
require_once __DIR__ . '/../models/Fornecedor.php';

class FornecedorController {


    public static function index() {

        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require __DIR__ . '/../views/fornecedores.php';
    }

    
    public static function novo() {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require __DIR__ . '/../views/fornecedores-criar.php';
    }


    public static function criarFornecedor() {
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nome = $_POST['nome_empresa'];

            $tel = $_POST['telefone_principal'];

            $email = $_POST['email_principal'];
            
            $end = $_POST['endereco'];

            Fornecedor::criarFornecedor($nome,$email,$tel,$end);
        }

        header("Location: ../fornecedores");
    }

    
    public static function apagar() {
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $idFor = $_POST['id_for_delete'];

            Fornecedor::apagar($idFor);

        }

        header('Location: /prova-php/fornecedores');
    }

    public static function encontrarFornecedores(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        $fornecedores = Fornecedor::encontrarFornecedores();

        return $fornecedores;
    }

}
