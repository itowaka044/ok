<?php require __DIR__ . '/layout/header.php';
require_once 'security\CsrfToken.php';

$token = CsrfToken::gerarToken('editar_servico');
?>

<h2>Editar Serviço</h2>

<?php
      $fornecedores = FornecedorController::encontrarFornecedores();

      foreach($fornecedores as $fornecedor){

        if($fornecedor['0'] == $_GET['id-for']){
          $nomeFor = $fornecedor['1'];
        }

      }

  ?>

<form action="/prova-php/servicos/atualizar" method="post">

  <input type="hidden" name="csrf_token" value="<?= $token ?>">
  <input type="hidden" name="id-ser" value="<?= $_GET['id-ser'] ?>">

  <label>Fornecedor</label>

  <select name="fornecedor_id">
    <?php 

    foreach($fornecedores as $fornecedor){
    
    ?>
    <option value="<?= $fornecedor['0'] ?>" selected><?= $fornecedor['1'] ?></option>
    <?php
    }
    ?>
  </select>

  <label>Título</label>
  <input type="text" name="titulo" value="<?= $s['titulo'] ?? '' ?>">
  <label>Preço</label>

  <input type="text" name="preco" value="<?= $s['preco'] ?? '' ?>">

  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="../../servicos/ver/<?= $s['fornecedor_id'] ?>">Cancelar</a>

</form>

<?php require __DIR__ . '/layout/footer.php'; ?>