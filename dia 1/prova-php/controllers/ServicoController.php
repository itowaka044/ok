<?php
require_once __DIR__ . '/../models/Servico.php';
require_once __DIR__ . '/../models/Fornecedor.php';

class ServicoController {

    public static function verServicos($idFornecedor) {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require __DIR__ . '/../views/servicos.php';
    }
    

    public static function editarServico($idServico) {
        
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
        }

        require __DIR__ . '/../views/servicos-editar.php';
    }


    public static function atualizarServico() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: login');
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
