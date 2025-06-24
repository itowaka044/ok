<?php require __DIR__ . '/layout/header.php'; ?>

<h2>Editar Serviço</h2>

<form action="../atualizar" method="post">
  <input type="hidden" name="id" value="<?= $s['id'] ?>">

  <label>Fornecedor</label>

  <select name="fornecedor_id">
    <?php 
      require_once 'controllers\FornecedorController.php';

      $fornecedores = FornecedorController::encontrarFornecedores();
      var_dump($fornecedores);
      foreach($fornecedores as $forn){
        
    ?>
      <option value='<?= $forn['0']?>' selected><?= $forn['1'] ?></option>

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