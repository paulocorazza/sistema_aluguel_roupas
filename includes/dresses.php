<?php

$resultados = '';
  foreach($dresses as $dress){
  $resultados .= '<tr>
                      <td>'.$dress->code.'</td>
                      <td><img src="/App/img/'.$dress->photo.'" class="img-fluid" style="height: 200px; width: 250px;" loading="lazy"></td>
                      <td>'.$dress->status.'</td>
                      <td>'.'R$ '.$dress->rentPrice .'</td>
                      <td>'.'R$ '.$dress->buyPrice .'</td>
                      <td>'.'R$ '.$dress->salePrice .'</td>
                      <td>'.$dress->size .'</td>
                      <td>
                        <a href="/views/dressEdit.php?id='.$dress->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="/views/dressDelete.php?id='.$dress->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                  </tr>';
  }

?>

<div class="p-5 bg-light mt-4">
  <h1 class="text-center">Vestidos</h1>
</div>

<div class="container">
  <div class="mt-3">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newDress">Novo Vestido</button>
  </div>

  <table class="table bg-light mt-4 table-striped">
    <thead class="bg-primary text-light">
      <tr>
        <th class="text-center"><i class="fa-solid fa-id-card"></i>
          <p></p>Código
        </th>
        <th class="text-center"><i class="fa-solid fa-image"></i>
          <p></p>Foto
        </th>
        <th class="text-center"><i class="fa-solid fa-list-check"></i>
          <p></p>Status
        </th>
        <th class="text-center"><i class="fa-solid fa-money-bill"></i>
          <p></p>Preço Aluguel
        </th>
        <th class="text-center"><i class="fa-solid fa-money-bill"></i>
          <p></p>Preço Compra
        </th>
        <th class="text-center"><i class="fa-solid fa-money-bill"></i>
          <p></p>Preço Promoção
        </th>
        <th class="text-center"><i class="fa-solid fa-ruler-horizontal"></i>
          <p></p>Tamanho
        </th>
        <th class="text-center"><i class="fa-solid fa-circle-exclamation"></i>
          <p></p>Ações
        </th>
      </tr>
    </thead>
    <tbody>
      <?=$resultados?>
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="newDress" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title text-white">Criar novo vestido</h5>
        </div>
        <form method="POST">
          <div class="modal-body">
            <i class="fa-solid fa-id-card"></i>
            <label for="name">Código:</label>
            <input type="text" name="code" class="form-control">
            <p></p>
            <i class="fa-solid fa-image"></i>
            <label for="foto">Foto:</label>
            <input type="file" name="photo" class="form-control">
            <p></p>
            <div class="row">
              <div class="col">
                <i class="fa-solid fa-money-bill"></i>
                <label for="name">Preço Aluguel:</label>
                <input type="number" name="rentPrice" class="form-control">
              </div>
              <div class="col">
                <i class="fa-solid fa-money-bill"></i>
                <label for="name">Preço Compra:</label>
                <input type="number" name="buyPrice" class="form-control">
              </div>
              <div class="col">
                <i class="fa-solid fa-money-bill"></i>
                <label for="name">Preço Promoção:</label>
                <input type="number" name="salePrice" class="form-control">
              </div>
            </div>
            <label for="status">Status</label>
            <select class="form-control" name="status">
              <option value="disponível">Disponível</option>
              <option value="promoção">Promoção</option>
            </select>
            <p></p>
            <label for="tamanho">Tamanho:</label>
            <input type="number" name="size" class="form-control">
            <input type="hidden" name="type" value="dress">
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
              <button type="submit" class="btn btn-primary" id="save">Salvar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>