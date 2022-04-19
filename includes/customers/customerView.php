<main>
    <div class="p-5 bg-light mt-4">
        <h1 class="text-center">Clientes</h1>
    </div>

    <div class="container">
        <p></p>
        <div class="col">
            <a href="/views/clientes.php">
                <button class="btn btn-primary">Voltar</button>
            </a>
            <h1 class="mt-3 text-center"><?=TITLE?></h1>
            <form method="POST" id="customer">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <i class="fa-solid fa-file-signature"></i>
                            <input type="hidden" id="id" value="<?= $customer->id ?>">
                            <label for="name">Nome:</label>
                            <input type="text" name="name" class="form-control" disabled value="<?= $customer->name ?>" required>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-file-signature"></i>
                            <label for="name">Sobrenome:</label>
                            <input type="text" name="surname" class="form-control" disabled value="<?= $customer->surname?>"
                                required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <i class="fa-solid fa-location-dot"></i>
                            <label for="city">Estado:</label>
                            <input type="text" value="<?= $customer->state ?>" class="form-control" disabled>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-city"></i>
                            <label for="city">Cidade:</label>
                            <input type="text" value="<?= $customer->city ?>" class="form-control" disabled>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-road"></i>
                            <label for="street">Logradouro</label>
                            <input type="text" name="street" disabled value="<?= $customer->street?>" class="form-control">
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-arrow-down-1-9"></i>
                            <label for="number">Número</label>
                            <input type="number" name="addressNumber" disabled value="<?= $customer->addressNumber?>"
                                class="form-control">
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-comment"></i>
                            <label for="complement">Complemento</label>
                            <input type="text" name="addressComplement" disabled value="<?= $customer->addressComplement?>"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <i class="fa-solid fa-at"></i>
                            <label for="email">Email:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">@</span>
                                </div>
                                <input type="text" class="form-control" disabled name="email" placeholder="email"
                                    aria-label="email" value="<?= $customer->email?>" aria-describedby="basic-addon1"
                                    required>
                            </div>
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-cake-candles"></i>
                            <label for="birthday">Aniversário</label>
                            <input type="date" name="birthday" disabled value="<?= $customer->birthday?>" class="form-control">
                        </div>
                        <div class="col">
                            <i class="fa-solid fa-phone"></i>
                            <label for="telephone">Telefone:</label>
                            <input type="text" name="phoneNumber" disabled class="form-control"
                                value="<?= $customer->phoneNumber?>" required>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
