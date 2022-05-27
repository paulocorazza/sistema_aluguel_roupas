<main>
    <div class="p-5 bg-light mt-4">
        <h1 class="text-center">Locaçōes</h1>
    </div>

    <div class="container">
        <p></p>
        <div class="col">
            <a href="/views/locacoes.php">
                <button class="btn btn-primary">Voltar</button>
            </a>
           
            <h1 class="mt-3 text-center"><?=TITLE . ' '.$lease->id?> </h1>
            <input id="id" type="hidden" value="<?= $lease->id ?>">
            <form method="POST" id="lease-form">
                <div class="form-group">
                    <label for="customer">Cliente:</label>
                    <select class="form-control" name="customerId">
                    <option selected><?= $lease->customerId ?></option>
                        <?php foreach($customers as $customer) {?>
                        <?php  echo '<option value="'.$customer->id.'">' . $customer->id .' - ' .$customer->name.'</option>' ?>
                        <?php } ?>
                    </select>
                    <label for="tryDate">Data de prova</label>
                    <input type="datetime-local" value="<?= $lease->tryDate ?>" class="form-control" name="tryDate">
                    <label for="tryDate">Data de Retirada</label>
                    <input type="datetime-local" value="<?= $lease->takeDate ?>" class="form-control" name="takeDate">
                    <label for="tryDate">Data de Retorno</label>
                    <input type="date" class="form-control" value="<?= $lease->returnDate ?>" name="returnDate">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success" id="save">Salvar</button>
                    <button type="button" id="<?= $lease->id ?>" onclick="setLeaseId(this);" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addItem">Adicionar Item</button>
                </div>
            </form>
        </div>
  <div class="modal fade" id="addItem" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 id="lease-item" class="modal-title text-white"></h5>
      </div>
      <form method="POST" id="lease_item_form">
        <div class="modal-body">
          <div class="form-group">
              <dl class="text-center">
                <dt>Por favor, selecione um vestido, clique no desejado, caso queire, coloque uma observação e aperte enter.</dt>
                <dd>
                    <ul style="list-style-type:none;">
                    <?php foreach($clothes as $clothe) { ?>
                      <li>
                        <span>
                          Código
                        </span>
                        <p><?= $clothe->code ?></p>
                        <p>R$<?= $clothe->rentPrice ?></p> 
                        <figure>
                          <img class="photo" id="<?= $clothe->code ?>" src="/assets/img/<?= $clothe->photo ?>" onclick="setClotheCode(this)" style="height: 100px"; width:150px;">
                        </figure>
                      </li>
                      <hr>
                    <?php } ?>
                    </ul>
                </dd>
            </dl>
          </div>  
          <div class="form-group">
            <input type="hidden" name="lease_id"  value="" id="lease_id">
            <input type="hidden" name="clothe_id" value="" id="clothe_id">
            <input type="hidden" id="clothe_code" name="clothe_code" value="" id="clothe_code">
            <input type="hidden" id="rentPrice" name="rentPrice" value="">
            <label for="code"><i class="fa-solid fa-barcode"></i> Código do vestido abaixo:</label>
            <p id="codigo_roupa"></p>
            <!-- <input type="text" value="" id="codigo_roupa" class="form-control" disabled> -->
          </div>
          <div class="form-group">
            <label for="price"><i class="fa fa-money"></i> Preço de aluguel:</label>
            <p id="aluguel"></p>
            <!-- <input type="number" value="" id="aluguel" class="form-control" disabled> -->
          </div>
          <div class="form-group">
             <label for="observacao"><i class="fa-solid fa-comment"></i> Caso queira, digite uma observação:</label>
             <input type="text" id="comments" class="form-control" name="comments">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
          <button type="submit" class="btn btn-success" id="save">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div>
  <hr>
</div>

<h1 class="text-center">Items da locação</h1>
<table class="table bg-light mt-4 table-striped">
  <thead class="bg-primary text-light">
    <tr>
      <th><i class="fa-solid fa-id-card"></i> Locação</th>
      <th><i class="fa-solid fa-file-signature"></i> Código</th>
      <th><i class="fa-solid fa-file-signature"></i> Observações</th>
      <th><i class="fa-solid fa-money-bill"></i> Preço</th>
      <th><i class="fa-solid fa-circle-exclamation"></i> Ações</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($leaseItems as $leaseItem) { ?>
  <?php echo '<input type="hidden" value="'.$leaseItem['id'].'" >' ?>
  <?php echo '<tr><td>'.$leaseItem['lease_id'].'</td>' ?>
  <?php echo '<td>'.$leaseItem['clothe_code'].'</td>' ?>
  <?php echo '<td>'.$leaseItem['comments'].'</td>' ?>
  <?php echo '<td>'.$leaseItem['rentPrice'].'</td>' ?>
  <?php echo '<td>
                <a href="/views/leaseItemsDelete.php?id='.$leaseItem['id'].'" class="btn btn-danger">Excluir</a>
              </td>' ?>
  <?php echo '</tr>' ?>
  <?php } ?>
  </tbody>
</table>
<?php if($leaseItemsTotal[0]['sum(rentPrice)'] != 0) { ?>
<p class="text-center">Valor Total = <strong>R$ <?= $leaseItemsTotal[0]['sum(rentPrice)'] ?></strong></p>
<?php } else {?>
<?php echo '<p>Sem items de locação!</p>' ?>
<?php } ?>


</div>
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/leases/edit.js"></script>



