<main class="text-center">
  <div class="p-5 bg-light mt-4">
    <h1 class="text-center">Usuários</h1>
  </div>
  <div class="container">
    <form method="post">
      <div class="form-group">
        <h5>Você deseja realmente excluir o usuário <strong><?=$user->name ?></strong>?</h5>
      </div>
      <div class="form-group">
        <a href="/views/usuarios.php">
          <button type="button" class="btn btn-primary">Cancelar</button>
        </a>
        <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
      </div>
    </form>
  </div>
</main>