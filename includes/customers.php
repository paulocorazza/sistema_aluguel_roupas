<?php


$results = '';
  foreach($customers as $customer){
  //$dateFormatted = date('d/m/Y H:i:s',strtotime('-3 hours',strtotime($customer->date)));
  $results .= '<tr>
                      <td style="font-size: small; ">'.$customer->id.'</td>
                      <td style="font-size: small;">'.$customer->name.'</td>
                      <td style="font-size: small;">'.$customer->surname.'</td>
                      <td style="font-size: small;">'.$customer->city.'</td>
                      <td style="font-size: small;">'.$customer->state.'</td>
                      <td style="font-size: small;">'.$customer->street.'</td>
                      <td style="font-size: small;">'.$customer->addressNumber.'</td>
                      <td style="font-size: small;">'.$customer->addressComplement.'</td>
                      <td style="font-size: small;"> '.$customer->birthday.'</td>
                      <td style="font-size: small;">'.$customer->phoneNumber.'</td>
                      <td style="font-size: small;">'.$customer->email.'</td>
                      <td style="font-size: small;"> '.$customer->created_at.'</td>
                      <td style="font-size: small; ">
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

<div class="mt-3">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newcustomer">Novo Cliente</button>
</div>

<table class="table bg-light mt-4 table-striped">
    <thead class="bg-primary text-light">
        <tr>
            <th class="text-center" style="font-size: small; ">ID</th>
            <th class="text-center" style="font-size: small; ">Nome</th>
            <th class="text-center" style="font-size: small; ">Sobrenome</th>
            <th class="text-center" style="font-size: small; ">Cidade</th>
            <th class="text-center" style="font-size: small; ">Estado</th>
            <th class="text-center" style="font-size: small; ">Rua</th>
            <th class="text-center" style="font-size: small; ">Número</th>
            <th class="text-center" style="font-size: small; ">Complemento</th>
            <th class="text-center" style="font-size: small; ">Aniversário</th>
            <th class="text-center" style="font-size: small; ">Telefone</th>
            <th class="text-center" style="font-size: small; ">e-mail</th>
            <th class="text-center" style="font-size: small; ">Criado em</th>
            <th class="text-center" style="font-size: small; ">Ações</th>
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
            <form method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="name">Nome:</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="name">Sobrenome:</label>
                                <input type="text" name="surname" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="city">Estado</label>
                                <select name="state" id="states" class="form-control" onchange="populateCitySelect()"
                                    required>
                                    <option>Selecione um</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="city">Cidade</label>
                                <select name="city" id="cities" class="form-control">
                                    required>
                                    <option>Selecione uma</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="street">Logradouro</label>
                                <input type="text" name="street" class="form-control">
                            </div>
                            <div class="col">
                                <label for="number">Número</label>
                                <input type="number" name="addressNumber" class="form-control">
                            </div>
                            <div class="col">
                                <label for="complement">Complemento</label>
                                <input type="text" name="addressComplement" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
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
                                <label for="birthday">Aniversário</label>
                                <input type="date" name="birthday" class="form-control">
                            </div>
                            <div class="col">
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


<!-- Modal
<div class="modal fade modal-large" id="newcustomer" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Criar novo cliente</h5>
            </div>
            <form method="POST">
                <div class="modal-body">

                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">cancelar</button>
        <button type="submit" class="btn btn-primary" id="save">Salvar</button>
    </div>
</div> -->




<script>
    const selectStates = document.querySelector('#states');
    const selectCities = document.querySelector('#cities');

    function populateStateSelect() {
        fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
            .then(res => res.json())
            .then(states => {

                states.map(state => {
                    //console.log(state.nome)
                    const option = document.createElement('option');
                    option.setAttribute('value', state.sigla);
                    option.textContent = state.sigla;
                    selectStates.appendChild(option);
                });
            })
    }

    function populateCitySelect() {

        let select = document.getElementById('states');
        let value = select.options[select.selectedIndex].value;

        fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${value}/municipios`)
            .then(res => res.json())
            .then(cities => {

                cities.map(city => {
                    console.log(city.nome)
                    const option = document.createElement('option');
                    option.setAttribute('value', city.nome);
                    option.textContent = city.nome;
                    //option.removeChild(option.firstElementChild);
                    selectCities.appendChild(option);
                });
            })

    }

    // function removeOptionSelected() {
    //     let option = document.getElementById("cities");
    //     while (option.hasChildNodes()) {
    //         option.removeChild(option.firstChild);
    //     }
    // }

    populateStateSelect();
</script>