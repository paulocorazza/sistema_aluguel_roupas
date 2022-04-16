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
            <form method="POST" id="dress-form">
                <input type="hidden" id="id" value="<?= $dress->id ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <img src="/assets/img/<?= $dress->photo ?>" style="height: 200px; width: 250px;"
                                    class="rounded" alt="<?= $dress->photo ?>">
                                <br>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#update">Clique aqui para atualizar a
                                    foto</button>
                            </div>
                            <i class="fa-solid fa-id-card"></i>
                            <label for="name">Código:</label>
                            <input type="text" name="code" value="<?= $dress->code ?>" class="form-control">
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

     <!-- Modal -->
     <div class="modal fade" id="update" role="dialog">
            <div class="modal-dialog" role="document">
                <form method="POST">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Atualizar Foto</h5>
                        </div>
                        <div class="modal-body">
                            <label for="photo">Selecione a nova foto:</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
                            <button type="" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="/assets/js/clothes/dress/edit.js"></script>