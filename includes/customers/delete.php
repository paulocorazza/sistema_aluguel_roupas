<main class="text-center">
  <div class="container">
    <div class="p-5 bg-light mt-4">
      <h1 class="text-center">Clientes</h1>
    </div>
    <h2 class="mt-3">Excluir Cliente</h2>
    <form method="post">
      <div class="form-group">
        <h5>Você deseja realmente excluir o Cliente <strong><?=$customer->name ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/clientes.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
      </div>
    </form>
  </div>
</main>