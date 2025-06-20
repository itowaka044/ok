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
        $res = $banco->query("");
        // return algo;
    }

    public static function getById($id) {
        $banco = Banco::getConn();
        $res = $banco->query("");
        // return algo;
    }

    public static function editar($idServico, $idFornecedor, $titulo, $preco) {
        $banco = Banco::getConn();
        $sql = "";
        return $banco->query($sql);
    }


    public static function apagar($id) {
        $banco = Banco::getConn();
        return $banco->query("DELETE FROM servicos WHERE id=$id");
    }
}
?>