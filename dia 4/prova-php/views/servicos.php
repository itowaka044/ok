<?php 
  require __DIR__ . '/layout/header.php'; 
  require __DIR__ . '/layout/cards.php';
?>

<h2>Serviços</h2>

<div class="cards-container">
  <?php 

    $servicos = ServicoController::buscarServicosDeUmFornecedor();

    // var_dump($servicos);

    foreach($servicos as $serv){
      // var_dump($serv);

      $id = $serv['0'];
      $fornecedor = $serv['1'];
      $titulo = $serv['2'];
      $preco = $serv['3'];


      cardServicos($id, $titulo, $fornecedor, $preco);

    }

    
    
    
  ?>
</div>

<?php require __DIR__ . '/layout/footer.php'; ?>