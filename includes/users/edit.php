<main>
<div class="p-5 bg-light mt-4">
  <h1 class="text-center">Usuários</h1>
</div>
<div class="container">
<div class="row mt-4">
        <div class="col">
            <a href="/views/usuarios.php">
                <button class="btn btn-primary">Voltar</button>
            </a>

            <h1 class="mt-3 text-center"><?=TITLE?></h1>

            <form method="POST" id="user-form">
                <div class="form-group">
                <input id="id" type="hidden" value="<?= $user->id ?>">
                <i class="fa-solid fa-file-signature"></i>
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="name" value="<?= $user->name ?>">
                </div>

                <div class="form-group">
                <input id="id" type="hidden" value="<?= $user->id ?>">
                <i class="fa-solid fa-file-signature"></i>
                    <label>Login:</label>
                    <input type="text" class="form-control" name="name" disabled value="<?= $user->login ?>">
                </div>


                <div class="form-group">
                <i class="fa-solid fa-at"></i>
                    <label>Email:</label>
                    <input type="text" class="form-control" name="email" value="<?= $user->email ?>">
                </div>

                <div class="form-group">
                <i class="fa-solid fa-key"></i>
                    <label for="password">Senha:</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/users/edit.js"></script>


