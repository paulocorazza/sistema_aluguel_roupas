<?php
$resultados = '';
  foreach($leases as $lease){
  $resultados .= '<tr>
                      <td>'.$lease->id.'</td>
                      <td>'.$lease->customerId.'</td>
                      <td>'.$lease->tryDate .'</td>
                      <td>'.$lease->takeDate.'</td>
                      <td>'.$lease->returnDate .'</td>
                      <td>
                        <a href="/views/leaseEdit.php?id='.$lease->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="/views/leaseDelete.php?id='.$lease->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                  </tr>';
  }

?>

<div class="p-5 bg-light mt-4">
  <h1 class="text-center">Locações</h1>
</div>

<div class="container">
<div class="mt-3">
  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newlease">Nova Locação</button>
</div>

<table class="table bg-light mt-4 table-striped">
  <thead class="bg-primary text-light">
    <tr>
      <th><i class="fa-solid fa-id-card"></i> ID</th>
      <th><i class="fa-solid fa-person"></i> Cliente</th>
      <th><i class="fa-solid fa-calendar-days"></i> Data de Prova</th>
      <th><i class="fa-solid fa-calendar-days"></i> Data de Retirada</th>
      <th><i class="fa-solid fa-calendar-days"></i> Data de retorno</th>
      <th><i class="fa-solid fa-circle-exclamation"></i> Ações</th>
    </tr>
  </thead>
  <tbody>
    <?=$resultados?>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="newlease" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Criar nova Locaçāo</h5>
      </div>
      <form method="POST" id="lease-form">
        <div class="modal-body">
         <label for="customer">Cliente:</label>
         <select class="form-control" name="customerId">
           <option selected >Selecione um Cliente...</option>
           <?php foreach($customers as $customer) {?>
           <?php  echo '<option value="'.$customer->id.'">'.$customer->name.'</option>' ?>
           <?php } ?>
         </select>
         <label for="tryDate">Data de prova</label>
         <input type="date" class="form-control" name="tryDate">
         <label for="tryDate">Data de Retirada</label>
         <input type="date" class="form-control" name="takeDate">
         <label for="tryDate">Data de Retorno</label>
         <input type="date" class="form-control" name="returnDate">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
          <button type="submit" class="btn btn-success" id="save">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/leases/lease.js"></script>



