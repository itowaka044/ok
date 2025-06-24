<?php


    function cardFornecedor($id, $nome, $email, $tel, $end, $img){
    ?>

        <div class="card">
            <img src="assets/img/fornecedores/<?=$img?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"> <?= $nome ?></h5>
                <p class="card-text">Telefone: <?= $tel ?></p>
                <p class="card-text">E-mail: <?= $email ?></p>
                <p class="card-text">Endereço: <?= $end ?></p>
                
                <form action="servicos/ver" method="GET">

                    <input type="hidden" name="id_for_servico" value="<?= $id ?>">
                    <button type="submit" style="width: 50%; height: 30px;margin-top:5px;">Ver serviços</button>
                </form>

                <form action="fornecedores/apagar" method="POST">

                    <input type="hidden" name="id_for_delete" value="<?= $id ?>">
                    <button type="submit" style="width: 50%; height: 30px;margin-top:5px;">Deletar Fornecedor</button>
                </form>
            </div>
        </div>
        
    <?php 
    }

    
    function cardServicos($id, $titulo, $fornecedor, $preco){
    ?>

        
        <div class="card">
        <img src="/prova-php/assets/img/servicos/img-1.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $titulo ?></h5>
            <p class="card-text">Fornecedor ID: <?= $fornecedor ?></p>
            <p class="card-text">Preço: R$ <?= $preco ?></p>
                <form action="/prova-php/servicos/editar" method="GET">

                    <input type="hidden" name="id_ser_editar" value="<?= $id ?>">
                    <button type="submit" style="width: 50%; height: 30px;margin-top:5px;">Editar</button>
                </form>
            <a href="../../servicos/apagar/<?= $id ?>" class="btn btn-danger">Excluir</a>
        </div>
        </div>
        
    <?php 
    }



?>