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

<div class="mt-3">
  <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newUser">Novo Usuario</button>
</div>

<table class="table bg-light mt-4 table-striped">
  <thead class="bg-primary text-light">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Criado em </th>
      <th>Ações</th>
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
      <form method="POST">
        <div class="modal-body">
          <label for="name">Nome:</label>
          <input type="text" name="name" class="form-control">
          <label for="email">email:</label>
          <input type="text" name="email" class="form-control">
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

  <!-- <script>

    let save = document.getElementById("save");
    save.addEventListener("click", function(event){
      event.preventDefault();
      Swal.fire({
        title: 'Obaa',
        text: 'Usuário criado com sucesso!',
        icon: 'success',
        onClose: redirect   
      })
      
    });

    function redirect(){
      window.location.href("/views/usuarios.php");
    }

  </script> -->

