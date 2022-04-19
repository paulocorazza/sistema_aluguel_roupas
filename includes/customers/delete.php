<main class="text-center">
  <div class="p-5 bg-light mt-4">
    <h1 class="text-center">Clientes</h1>
  </div>
  <div class="container">
  <form method="POST">
      <?php if(!$_POST != null) { ?>
      <div class="form-group">
        <h5>Você deseja realmente excluir o cliente <strong><?=$customer->name ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/clientes.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
      </div>
      <?php } else { ?>
      <div class="alert alert-dismissible alert-success">
        <strong>Feito, Cliente <strong><?= $customer->name ?></strong> excluído com sucesso <a href="/views/clientes.php">Clique aqui para voltar!</a>
      </div>
      <?php } ?>
    </form>
  </div>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
  integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>