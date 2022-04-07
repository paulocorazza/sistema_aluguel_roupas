<main>
    <div class="row mt-4">
        <div class="col">
            <a href="/views/usuarios.php">
                <button class="btn btn-primary">Voltar</button>
            </a>

            <h1 class="mt-3 text-center"><?=TITLE?></h1>

            <form method="POST">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                </div>

                <div class="form-group">
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" value="<?= $user->email ?>">
                </div>

                <div class="form-group">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</main>