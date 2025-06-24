<?php
require_once __DIR__ . '/../config/banco.php';

class Fornecedor {

    public static function encontrarFornecedores()  {
        $banco = Banco::getConn();

        $stmt = $banco->query("select * from fornecedores");

        return $stmt->fetch_all();
    }
    
    public static function criarFornecedor($nome, $email, $tel, $end) {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("insert into fornecedores(nome_empresa,email_principal,telefone_principal,endereco) values (?,?,?,?);");

        $stmt->bind_param("ssss", $nome,$email,$tel,$end);

        $stmt->execute();
    }
    
    public static function apagar($idFornecedor) {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("delete from fornecedores where id = ?");

        $stmt->bind_param("s", $idFornecedor);

        $stmt->execute();
    }
    
}
