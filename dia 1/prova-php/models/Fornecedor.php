<?php
require_once __DIR__ . '/../config/banco.php';

class Fornecedor {

    public static function encontrarFornecedores()  {
        $banco = Banco::getConn();

        $res = $banco->query("SELECT * FROM fornecedores");

        return $res->fetch_all();
    }
    
    public static function criarFornecedor($nome, $email, $tel, $end) {
        $banco = Banco::getConn();


        $stmt = $banco->prepare("INSERT INTO fornecedores (nome_empresa, telefone_principal, email_principal, endereco) VALUES (?,?,?,?)");

        $stmt->bind_param("ssss", $nome,$email,$tel,$end);

        return $stmt->execute();


    }
    
    public static function apagar($idFornecedor) {
        $banco = Banco::getConn();
        $stmt = $banco->prepare("delete from fornecedores where id = ?");

        $stmt->bind_param("s", $idFornecedor);

        return $stmt->execute();
    }
    
}
