<?php
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/cards.php';
?>

<h2>Fornecedores</h2>

<a href="fornecedores/novo" class="btn btn-primary">Novo Fornecedor</a>
<br><br>

<div class="cards-container">

  <?php

    $fornecedores = FornecedorController::encontrarFornecedores();

    // print_r($fornecedores);


    foreach($fornecedores as $forn){
      $img = 'img-0.jpg';

      $id = $forn['0'];
      $nome = $forn['1'];
      $tel = $forn['2'];
      $email = $forn['3'];
      $end = $forn['4'];

  ?>

        <div class="card">
            <img src="assets/img/fornecedores/<?=$img?>" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title"> <?= $nome ?></h5>
                <p class="card-text">Telefone: <?= $tel ?></p>
                <p class="card-text">E-mail: <?= $email ?></p>
                <p class="card-text">Endereço: <?= $end ?></p>
                <form action="fornecedores/apagar" method="GET">
                  <input type="hidden" name='id' value="<?= $id?>">
                  <button type="submit" style="cursor: pointer; border:1px solid red; background-color:red; color:white;">excluir</button>
                </form>


                <form action="servicos/ver" method="GET">
                  <input type="hidden" name='id-ser' value="<?= $id?>">
                  <button type="submit" style="cursor: pointer; border:1px solid green; background-color:green; color:white">Ver Fornecedor</button>
                </form>
                
                <!-- <a href="servicos/ver<?php echo "?id=$id" ?>" class="btn btn-secondary">Ver Fornecedor</a> -->
            </div>
        </div>

  <?php
    }
  ?>

</div>


<?php require __DIR__ . '/layout/footer.php'; ?>