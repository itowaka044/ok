<?php
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/cards.php';
?>

<h2>Fornecedores</h2>

<a href="fornecedores/novo" class="btn btn-primary">Novo Fornecedor</a>
<br><br>

<div class="cards-container">

  <?php

    require_once 'controllers\FornecedorController.php';


    $fornecedores = FornecedorController::encontrarFornecedores();

    // var_dump($fornecedores);

    foreach($fornecedores as $forne){
      $id = $forne['0'];
      $nome = $forne['1'];
      $tel = $forne['2'];
      $email = $forne['3'];
      $end = $forne['4'];

      $img = 'img-0.jpg';
      
      cardFornecedor($id, $nome, $email, $tel, $end, $img);

    }

  ?>

</div>


<?php require __DIR__ . '/layout/footer.php'; ?>