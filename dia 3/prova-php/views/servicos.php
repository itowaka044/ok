<?php 
  require __DIR__ . '/layout/header.php'; 
  require __DIR__ . '/layout/cards.php';
?>

<h2>Serviços</h2>

<div class="cards-container">
  <?php 
  
    $servicosAll = ServicoController::buscarServicosDeUmFornecedor();


    // var_dump($servicosAll);

    foreach($servicosAll as $serv){

      $id = $serv['0'];
      $fornecedor = $serv['1'];
      $titulo = $serv['2'];
      $preco = $serv['3'];


      cardServicos($id, $titulo, $fornecedor, $preco);

    }
    
  ?>
</div>

<?php require __DIR__ . '/layout/footer.php'; ?>