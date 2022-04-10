<?php

$resultados = '';
  foreach($dresses as $dress){
  $resultados .= '<tr>
                      <td>'.$dress->code.'</td>
                      <td><img src="/App/img/'.$dress->photo.'" class="img-fluid" style="height: 200px; width: 250px;" loading="lazy"></td>
                      <td>'.$dress->status.'</td>
                      <td>'.$dress->rentPrice .'</td>
                      <td>'.$dress->buyPrice .'</td>
                      <td>'.$dress->salePrice .'</td>
                      <td>'.$dress->size .'</td>
                      <td>
                        <a href="/views/userEdit.php?id='.$dress->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="/views/userDelete.php?id='.$dress->id.'">
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
      <th><i class="fa-solid fa-id-card"></i>Código</th>
      <th><i class="fa-solid fa-file-signature"></i>Foto</th>
      <th><i class="fa-solid fa-at"></i>Status</th>
      <th><i class="fa-solid fa-calendar-days"></i>Preço Aluguel</th>
      <th><i class="fa-solid fa-circle-exclamation"></i>Preço Compra</th>
      <th><i class="fa-solid fa-circle-exclamation"></i>Preço Promoção</th>
      <th><i class="fa-solid fa-circle-exclamation"></i>Tamanho</th>
      <th><i class="fa-solid fa-circle-exclamation"></i>Ações</th>
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
        <h5 class="modal-title text-white">Criar novo usuario</h5>
      </div>
      <form method="POST">
        <div class="modal-body">
          <i class="fa-solid fa-file-signature"></i>
          <label for="name">Nome:</label>
          <input type="text" name="name" class="form-control">
          <i class="fa-solid fa-at"></i>
          <label for="email">email:</label>
          <input type="text" name="email" class="form-control">
          <i class="fa-solid fa-key"></i>
          <label for="name">Senha:</label>
          <input type="password" name="password" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
          <button type="submit" class="btn btn-primary" id="save">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>




