<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-3 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sistema de Loja - Aluguel de Trajes sociais
                    </h5>
                    <form method="POST">
                        <p class="text-center">Entre com seus dados abaixo para logar.</p>
                        <div class="form-floating mb-3">
                            <label for="email">Endereço de email:</label>
                            <input type="email" name="email" class="form-control" placeholder="name@example.com">

                        </div>
                        <div class="form-floating mb-3">
                            <label for="password">Senha:</label>
                            <input type="password" name="password" class="form-control" id="floatingPassword"
                                placeholder="Password">

                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Logar</button>
                        </div>
                        <hr class="my-4">
                    </form>
                    <p class="text-center">Corazza Soluções em TI - <?= date('Y') ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>