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
populateStateSelect();

let id = document.getElementById("id").value;
$(document).ready(function () {
$('#customer').on('submit', function (e){
  $.ajax({
    url: `/views/customerEdit.php?id=${id}`,
    data: $(this).serialize(),
    type: 'POST',
    success: function(data){
      Swal.fire({
        icon: 'success',
        title: 'Sucessso!',
        text: 'Cliente alterado com sucesso!',
        confirmButtonText : 'Voltar'
      }).then((result) => {
        if(result.isConfirmed){
          window.location.href = '/views/clientes.php'
        }
      })
    },
    error: function (data) {
      Swal.fire(
        'Opaa!',
        'Algo deu errado',
        'warning'
      )
    }
  });
  e.preventDefault();
});
});

