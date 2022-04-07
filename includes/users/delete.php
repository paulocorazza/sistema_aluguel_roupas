<main>

  <h2 class="mt-3">Excluir Usuário</h2>

  <form method="post">

    <div class="form-group">
      <p>Você deseja realmente excluir o usuário <strong><?=$user->name ?></strong>?</p>
    </div>

    <div class="form-group">
      <a href="/views/usuarios.php">
        <button type="button" class="btn btn-primary">Cancelar</button>
      </a>

      <button type="submit" name="delete" class="btn btn-danger">Excluir</button>
    </div>

  </form>

</main>