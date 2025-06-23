<?php
require __DIR__ . '/layout/header.php';
require __DIR__ . '/layout/cards.php';
?>

<h2>Fornecedores</h2>

<a href="fornecedores/novo" class="btn btn-primary">Novo Fornecedor</a>
<br><br>

<div class="cards-container">

  <?php

    $fornecedoresAll = FornecedorController::encontrarFornecedores();

    // print_r($fornecedoresAll);

    foreach($fornecedoresAll as $forn){
      $img = 'img-0.jpg';
      $id = $forn['0'];
      $nome = $forn['1'];
      $tel = $forn['2'];
      $email = $forn['3'];
      $end = $forn['4'];
    
      cardFornecedor($id, $nome, $email, $tel, $end, $img);

    }
  ?>

</div>


<?php require __DIR__ . '/layout/footer.php'; ?>