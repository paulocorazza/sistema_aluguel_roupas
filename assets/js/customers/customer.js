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

$(document).ready(function () {
    $('#customer').on('submit', function (e) { //Don't foget to change the id form
        $.ajax({
            url: '/views/clientes.php', //===PHP file name====
            data: $(this).serialize(),
            type: 'POST',
            success: function (data) {
                console.log(data);
                //Success Message == 'Title', 'Message body', Last one leave as it is
                Swal.fire({
                    icon: 'success',
                    title: 'Sucessso!',
                    text: 'Cliente criado com sucesso!',
                    confirmButtonText: 'Voltar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '/views/clientes.php'
                    }
                })

            },
            error: function (data) {
                //Error Message == 'Title', 'Message body', Last one leave as it is
                Swal.fire(
                    'Opaa!',
                    'Algo deu errado',
                    'warning'
                )
            }
        });
        e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
});