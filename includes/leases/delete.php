<main class="text-center">
  <div class="p-5 bg-light mt-4">
    <h1 class="text-center">Locações</h1>
  </div>
  <div class="container">
  <form method="POST">
      <?php if(!$_POST != null) { ?>
      <div class="form-group">
        <h5>Você deseja realmente excluir a Locação <strong><?= $lease->id ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/locacoes.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
      </div>
      <?php } else { ?>
      <div class="alert alert-dismissible alert-success">
        <strong>Feito, locação <strong><?= $lease->id ?></strong> excluído com sucesso <a
            href="/views/locacoes.php">Clique aqui para voltar!</a>
      </div>
      <?php } ?>
    </form>
  </div>
</main>
