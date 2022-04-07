<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Sistema de Loja - Aluguel de Trajes sociais
                    </h5>
                    <form method="POST" >
                        <p>Entre com seus dados abaixo para logar.</p>
                        <div class="form-floating mb-3">
                            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Endereço de email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Senha</label>
                        </div>

                        <div class="d-grid">
                        <button type="submit" class="btn btn-success btn-block">Logar</button>
                        </div>
                        <hr class="my-4">
                    </form>
                    <p class="text-center">Corazza Soluções em TI - <?= date('Y') ?> </p>
                </div>
            </div>
        </div>
    </div>
</div>