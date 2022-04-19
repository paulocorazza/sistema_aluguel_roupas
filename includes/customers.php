<?php


$results = '';
  foreach($customers as $customer){
  $dateFormatted = date('d/m/Y H:i:s',strtotime('-3 hours',strtotime($customer->created_at)));
  $birthdayFormatted = date('d/m/Y',strtotime($customer->birthday)); 
  $results .= '<tr>
                      <td>'.$customer->id.'</td>
                      <td>'.$customer->name.'</td>
                      <td>'.$customer->surname.'</td>
                      <td>'.$customer->city.'</td>
                      <td>'.$customer->state.'</td>
                      <td>'.$customer->phoneNumber.'</td>
                      <td>'.$customer->email.'</td>
                      <td> '.$dateFormatted.'</td>
                      <td>
                        <a href="/views/customerInfo.php?id='.$customer->id.'">
                          <button type="button" class="btn btn-info btn-sm">Mais info</button>
                        </a>
                        <a href="/views/customerEdit.php?id='.$customer->id.'">
                          <button type="button" class="btn btn-warning btn-sm">Editar</button>
                        </a>
                        <a href="/views/customerDelete.php?id='.$customer->id.'">
                          <button type="button" class="btn btn-danger btn-sm">Excluir</button>
                        </a>
                      </td>
                  </tr>';
  }

?>

<div class="p-5 bg-light mt-4">
    <h1 class="text-center">Clientes</h1>
</div>

<div class="container">
    <div class="mt-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newcustomer">Novo Cliente</button>
    </div>

    <table class="table bg-light mt-4 table-striped">
        <thead class="bg-primary text-light">
            <tr>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-id-card"></i>
                    <p></p>ID
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-file-signature"></i>
                    <p></p>Nome
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-file-signature"></i>
                    <p></p>Sobrenome
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-city"></i>
                    <p></p>Cidade
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-location-dot"></i>
                    <p></p>Estado
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-phone"></i></i>
                    <p></p>Telefone
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-at"></i></i>
                    <p></p>e-mail
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-calendar"></i>
                    <p></p>Criado em
                </th>
                <th class="text-center" style="font-size: small; "><i class="fa-solid fa-circle-exclamation"></i>
                    <p></p>Ações
                </th>
            </tr>
        </thead>
        <tbody>
            <?=$results?>
        </tbody>
    </table>



    <!-- Modal -->
    <div class="modal fade modal-large" id="newcustomer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 class="modal-title text-white">Novo Cliente</h5>
                </div>
                <form method="POST" id="customer">
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-file-signature"></i>
                                    <label for="name">Nome:</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-file-signature"></i>
                                    <label for="name">Sobrenome:</label>
                                    <input type="text" name="surname" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <label for="city">Estado:</label>
                                    <select name="state" id="states" class="form-control"
                                        onchange="populateCitySelect()" required>
                                        <option selected>Selecione um</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-city"></i>
                                    <label for="city">Cidade:</label>
                                    <select name="city" id="cities" class="form-control">
                                        required>
                                        <option selected>Selecione uma</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-road"></i>
                                    <label for="street">Logradouro</label>
                                    <input type="text" name="street" class="form-control">
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-arrow-down-1-9"></i>
                                    <label for="number">Número</label>
                                    <input type="number" name="addressNumber" class="form-control">
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-comment"></i>
                                    <label for="complement">Complemento</label>
                                    <input type="text" name="addressComplement" class="form-control">
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
                                        <input type="text" class="form-control" name="email" placeholder="email"
                                            aria-label="email" aria-describedby="basic-addon1" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-cake-candles"></i>
                                    <label for="birthday">Aniversário</label>
                                    <input type="date" name="birthday" class="form-control">
                                </div>
                                <div class="col">
                                    <i class="fa-solid fa-phone"></i>
                                    <label for="telephone">Telefone:</label>
                                    <input type="text" name="phoneNumber" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="/assets/js/customers/customer.js"></script>