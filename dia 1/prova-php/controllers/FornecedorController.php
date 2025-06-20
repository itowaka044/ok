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
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $nome = $_POST['nome_empresa'];
            
            $email = $_POST['email_principal'];

            $tel = $_POST['telefone_principal'];

            $ender = $_POST['endereco'];

        }

        $fornecedorCriado = Fornecedor::criarFornecedor($nome, $email,$tel,$ender);

        if($fornecedorCriado){
            header("Location: ../fornecedores");
        } else {
            echo "erro ao criar fornecedor";
        }

        
    }

    
    public static function apagar() {
        session_start();

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['id'];

            Fornecedor::apagar($id);
        }

        header("Location: /prova-php/fornecedores");
    }

    public static function encontrarFornecedores(){

        $fornecedores = Fornecedor::encontrarFornecedores();

        return $fornecedores;

    }

}
