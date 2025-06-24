<?php
require_once __DIR__ . '/../models/Servico.php';
require_once __DIR__ . '/../models/Fornecedor.php';

class ServicoController {

    public static function verServicos() {

        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require_once __DIR__ . '/../views/servicos.php';
    }


    public static function buscarServicosDeUmFornecedor(){

        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'GET'){

            $id = $_GET['id-for-ser'];

            // print_r($id);

            $servicos = Servico::buscarServicosDeUmFornecedor($id);

            return $servicos;
            

        }

    }

    public static function buscarServicosDeUmFornecedorPorId($id){

        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        $servicos = Servico::buscarServicosDeUmFornecedor($id);

        return $servicos;
            
    }
    

    public static function editarServico() {
        
        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        
        require __DIR__ . '/../views/servicos-editar.php';
    }


    public static function atualizarServico() {
        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $token = $_POST['csrf_token'];

            if(!CsrfToken::validarToken('editar_servico', $token)){
                die('token invalido');
            }


            $idSer = $_POST['id-ser'];
            $idFor = $_POST['fornecedor_id'];
            $titulo = $_POST['titulo'];
            $preco = $_POST['preco'];

            $ok= Servico::editar($idSer, $idFor, $titulo, $preco);
            // var_dump($ok);

        }

        header("Location: /prova-php/fornecedores");

    }


    public static function apagarServico() {
        
        if(!isset($_SESSION)){
            session_start();
        }

        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $id = $_GET['id-ser'];

            Servico::apagar($id);

        }

        header("Location: /prova-php/fornecedores");
    }
}
