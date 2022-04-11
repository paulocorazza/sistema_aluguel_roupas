<main>
    <div class="p-5 bg-light mt-4">
        <h1 class="text-center">Vestidos</h1>
    </div>

    <div class="container">
        <p></p>
        <div class="col">
            <a href="/views/vestidos.php">
                <button class="btn btn-primary">Voltar</button>
            </a>
            <h1 class="mt-3 text-center"><?=TITLE?></h1>
            <form method="POST">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                            <img src="/App/img/<?= $dress->photo ?>" class="img-fluid" style="height: 200px; width: 250px;"
                            loading="lazy">
                            </div>
                            <i class="fa-solid fa-id-card"></i>
                            <label for="name">Código:</label>
                            <input type="text" name="code" value="<?= $dress->code ?>" class="form-control">
                            <p></p>
                            <i class="fa-solid fa-image"></i>
                            <label for="foto">Foto:</label>
                            <input type="file" name="photo" class="form-control" value="<?= $dress->photo ?>">
                            <p></p>
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <label for="name">Preço Aluguel:</label>
                                    <input type="number" name="rentPrice" value="<?= $dress->rentPrice ?>"
                                        class="form-control">
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <label for="name">Preço Compra:</label>
                                    <input type="number" name="buyPrice" value="<?= $dress->buyPrice ?>"
                                        class="form-control">
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-money-bill"></i>
                                    <label for="name">Preço Promoção:</label>
                                    <input type="number" name="salePrice" value="<?= $dress->salePrice ?>"
                                        class="form-control">
                                </div>
                            </div>
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option selected><?= $dress->status ?></option>
                                <option value="disponível">Disponível</option>
                                <option value="promoção">Promoção</option>
                            </select>
                            <p></p>
                            <label for="tamanho">Tamanho:</label>
                            <input type="number" name="size" value="<?= $dress->size ?>" class="form-control">
                        </div>
                    </div>
                    <p></p>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
            </form>
        </div>
    </div>

</main>