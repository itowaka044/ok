<?php
require_once __DIR__ . '/../config/banco.php';

class Servico {

    public static function buscarServicos() {
        $banco = Banco::getConn();
        $res = $banco->query("");
        // return algo;
    }

    public static function buscarServicosDeUmFornecedor($idFornecedor) {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("select * from servicos where fornecedor_id = ?");

        $stmt->bind_param('s', $idFornecedor);

        $stmt->execute();

        $result = $stmt->get_result();

        return $result->fetch_all();
    }

    public static function getById($id) {
        $banco = Banco::getConn();
        $res = $banco->query("");
        // return algo;
    }

    public static function editar($idServico, $idFornecedor, $titulo, $preco) {
        $banco = Banco::getConn();
        
        $stmt = $banco->prepare("update servicos set fornecedor_id = ?, titulo = ?, preco = ? where id = ?");

        $stmt->bind_param("ssss", $idFornecedor,$titulo,$preco,$idServico);

        return $stmt->execute();

    }


    public static function apagar($id) {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("delete from servicos where id = ?");
        $stmt->bind_param("s", $id);

        return $stmt->execute();
    }
}
?>