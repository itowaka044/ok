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
                
                <!-- <a href="servicos/ver/<?= $id ?>" class="btn btn-secondary">Ver Fornecedor</a>-->

                <form action="servicos/ver" method="GET">
                  <input type="hidden" name="id-for-ser" value="<?= $id ?>">
                  <button type="submit" style="width:100px;height:25px">Ver Fornecedor</button>
                </form>

                <form action="fornecedores/apagar" method="GET">
                  <input type="hidden" name="id-for" value="<?= $id ?>">
                  <button type="submit" style="width:55px;height:25px">Deletar</button>
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
              <input type="hidden" name="id-ser" value="<?= $id ?>">
              <input type="hidden" name="id-for" value="<?=$fornecedor ?>">
              <button type="submit" style="width:100px;height:25px">Editar</button>
            </form>

            <form action="/prova-php/servicos/apagar" method="GET">
              <input type="hidden" name="id-ser" value="<?= $id ?>">
              <button type="submit" style="width:55px;height:25px">Deletar</button>
            </form>
        </div>
        </div>
        
    <?php 
    }



?>