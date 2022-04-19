<main class="text-center">
<div class="p-5 bg-light mt-4">
    <h1 class="text-center">Vestidos</h1>
  </div>
  <div class="container">
    <h2 class="mt-3">Excluir Vestido</h2>
    <form method="post">
      <div class="text-center">
        <img src="/assets/img/<?= $dress->photo ?>" class="img-fluid" style="height: 200px; width: 250px;" loading="lazy">
      </div>
      <div class="form-group">
        <h5>Você deseja realmente excluir o vestido <strong><?=$dress->code ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/vestidos.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
      </div>
    </form>
  </div>
</main>