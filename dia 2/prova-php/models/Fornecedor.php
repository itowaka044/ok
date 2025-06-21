<?php
require_once __DIR__ . '/../config/banco.php';

class Fornecedor {

    public static function encontrarFornecedores()  {
        $banco = Banco::getConn();

        $res = $banco->query("select * from fornecedores");

        return $res->fetch_all();

    }
    
    public static function criarFornecedor($nome, $email, $tel, $end) {
        $banco = Banco::getConn();
        
        $stmt = $banco->prepare("insert into fornecedores(nome_empresa,telefone_principal,email_principal,endereco)
        values (?,?,?,?);");

        $stmt->bind_param("ssss", $nome,$tel,$email,$end);

        return $stmt->execute();

    }
    
    public static function apagar($idFornecedor) {
        $banco = Banco::getConn();

        $stmt = $banco->prepare("delete from fornecedores where id = ?");

        $stmt->bind_param("s", $idFornecedor);

        return $stmt->execute();


    }   
    
}
