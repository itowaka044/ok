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

    $id = 0;

    foreach($fornecedores as $fornecedor){

    

    $img = "img-1.jpg";

    $id = $fornecedor['0'];
    $nome = $fornecedor['1'];
    $tel = $fornecedor['2'];
    $email = $fornecedor['3'];
    $end = $fornecedor['4'];

  ?>

  <div class="card">
      <img src="assets/img/fornecedores/<?=$img?>" class="card-img-top">
      <div class="card-body">
          <h5 class="card-title"> <?= $nome ?></h5>
          <p class="card-text">Telefone: <?= $tel ?></p>
          <p class="card-text">E-mail: <?= $email ?></p>
          <p class="card-text">Endereço: <?= $end ?></p>
          

          <form action="fornecedores/apagar" method="get">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <button type="submit">APAGAR</button>
          </form>

          <a href="servicos/ver/<?= $id ?>" class="btn btn-secondary">Ver Fornecedor</a>
      </div>
  </div>

  <?php
    }
  ?>

</div>


<?php require __DIR__ . '/layout/footer.php'; ?>