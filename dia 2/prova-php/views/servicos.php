<?php 
  require __DIR__ . '/layout/header.php'; 
  require __DIR__ . '/layout/cards.php';
?>

<h2>Serviços</h2>

<div class="cards-container">
    <?php 

  $servicos = ServicoController::verServicos();

  print_r($servicos);

  foreach($servicos as $ser){

    // $id
    // $titulo
    // $fornecedor
    // $preco

    
    
  ?>
</div>


 <div class="card">
        <img src="../../assets/img/servicos/img-1.jpg" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title"><?= $titulo ?></h5>
            <p class="card-text">Fornecedor ID: <?= $fornecedor ?></p>
            <p class="card-text">Preço: R$ <?= $preco ?></p>
            <a href="../../servicos/editar/<?= $id ?>" class="btn btn-secondary">Editar</a>
            <a href="../../servicos/apagar/<?= $id ?>" class="btn btn-danger">Excluir</a>
        </div>
        </div>

  <?php
  }
  ?>

<?php require __DIR__ . '/layout/footer.php'; ?>