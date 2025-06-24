<?php
require_once __DIR__ . '/../models/Servico.php';
require_once __DIR__ . '/../models/Fornecedor.php';

class ServicoController {

    public static function verServicos() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require __DIR__ . '/../views/servicos.php';
    }

    public static function buscarServicosDeUmFornecedor(){
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $idFor = $_GET['id_for_servico'];

            $servicos = Servico::buscarServicosDeUmFornecedor($idFor);

            return $servicos;
            
        }
    }
    

    public static function editarServico() {
        
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        require __DIR__ . '/../views/servicos-editar.php';
    }


    public static function atualizarServico() {
        if(!isset($_SESSION)){
            session_start();
        }

        if(!isset($_SESSION['user_id'])){
            header('Location: login');
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $idServico = $_GET['id-ser-editar'];

            $newFornecedorId = $_POST['fornecedor_id'];
            $newTitulo = $_POST['titulo'];
            $newPreco = $_POST['preco'];

            Servico::editar($idServico, $newFornecedorId, $newTitulo, $newPreco);
            
        }


        header('Location: ../servicos');
    }


    public static function apagarServico($idServico) {
        
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        header('Location: ../../servicos');
    }
}
