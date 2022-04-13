<?php

$resultados = '';
  foreach($users as $user){
  $dateFormatted = date('d/m/Y H:i:s',strtotime('-3 hours',strtotime($user->date)));
  $resultados .= '<tr>
                      <td>'.$user->id.'</td>
                      <td>'.$user->name.'</td>
                      <td>'.$user->email.'</td>
                      <td>'.$dateFormatted .'</td>
                      <td>
                        <a href="/views/userEdit.php?id='.$user->id.'">
                          <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                        <a href="/views/userDelete.php?id='.$user->id.'">
                          <button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                      </td>
                  </tr>';
  }

?>

<div class="p-5 bg-light mt-4">
  <h1 class="text-center">Usuários</h1>
</div>

<div class="container">
<div class="mt-3">
  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newUser">Novo Usuario</button>
</div>

<table class="table bg-light mt-4 table-striped">
  <thead class="bg-primary text-light">
    <tr>
      <th><i class="fa-solid fa-id-card"></i> ID</th>
      <th><i class="fa-solid fa-file-signature"></i> Nome</th>
      <th><i class="fa-solid fa-at"></i> Email</th>
      <th><i class="fa-solid fa-calendar-days"></i> Criado em </th>
      <th><i class="fa-solid fa-circle-exclamation"></i> Ações</th>
    </tr>
  </thead>
  <tbody>
    <?=$resultados?>
  </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white">Criar novo usuario</h5>
      </div>
      <form method="POST" id="user-form">
        <div class="modal-body">
          <i class="fa-solid fa-file-signature"></i>
          <label for="name">Nome:</label>
          <input type="text" name="name" class="form-control" required>
          <i class="fa-solid fa-at"></i>
          <label for="email">email:</label>
          <input type="text" name="email" class="form-control" required>
          <i class="fa-solid fa-key"></i>
          <label for="name">Senha:</label>
          <input type="password" name="password" class="form-control" required>
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
<script>
  $(document).ready(function () {
    $('#user-form').on('submit', function (e) { //Don't foget to change the id form
      $.ajax({
        url: '/views/usuarios.php', //===PHP file name====
        data: $(this).serialize(),
        type: 'POST',
        success: function (data) {
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          Swal.fire({
            icon: 'success',
            title: 'Sucessso!',
            text: 'Usuário criado com sucesso!',
            confirmButtonText : 'Voltar'
          }).then((result) => {
            if(result.isConfirmed){
              window.location.href = '/views/usuarios.php'
            }
          })
          
        },
        error: function (data) {
          //Error Message == 'Title', 'Message body', Last one leave as it is
          Swal.fire(
            'Opaa!',
            'Algo deu errado',
            'danger'
          )
        }
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
  });
</script>



