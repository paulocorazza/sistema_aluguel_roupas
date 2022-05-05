<main class="text-center">
<div class="p-5 bg-light mt-4">
    <h1 class="text-center">Item da Locaçāo</h1>
  </div>
  <div class="container">
    <h2 class="mt-3">Excluir Item da Locaçāo</h2>
    <?php if(!$_POST != null) { ?>
    <form method="post">
      <div class="text-center">
        <img src="/assets/img/<?= $clothePhoto ?>" class="img-fluid" style="height: 200px; width: 250px;" loading="lazy">
      </div>
      <div class="form-group">
        <h5>Você deseja realmente excluir o item <strong><?= $clothe[0]['clothe_code'] ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/locacoes.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
        <?php } else { ?>
      <div class="alert alert-dismissible alert-success">
        <strong>Feito, item <strong><?= $clothe[0]['clothe_code'] ?></strong> excluído com sucesso <a
            href="/views/leaseEdit.php?id=<?=$leaseId[0]['lease_id']?>">Clique aqui para voltar!</a>
      </div>
      <?php } ?>
      </div>
    </form>
  </div>
</main>
