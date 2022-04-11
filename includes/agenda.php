<div class="col-md-12">
    <div id="calendar">
    </div>
</div>


<script>
       document.addEventListener('DOMContentLoaded', function () {
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap',
            locale: 'br',
            navLinks: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridDay'
            },
            dayMaxEvents: true,
            nowIndicator: true,
            
            eventClick: function (info) {
                const pecas = info.event.extendedProps.codigo;
                const cliente = info.event.title;
                const horaIni = info.event.start;
                const horaFim = info.event.end;
                const date = new Date(horaIni);
                const today = new Date();
                const element = document.getElementById('alerta');
                if (date <= today) {
                    element.classList.remove("alert-success");
                    element.classList.add("alert-danger");
                } else {
                    element.classList.remove("alert-danger");
                    element.classList.add("alert-success");
                }
                const finalDate = moment(date).format('DD/MM/YYYY hh:mm');
                $("#nomeCliente").val(cliente);
                // $("#pecas").val(pecas);
                document.getElementById('data').innerHTML = finalDate;
                $('#evento').modal('show');
            },
            eventSources: [{
                    url: '/evento',
                    method: 'GET',
                    color: 'red',
                    textColor: 'white',
                    failure: function (e) {
                        console.log(e);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Não consegui carregar as datas',
                        })
                    },
                },
                {
                    url: '/evento/retirada',
                    method: 'GET',
                    color: 'yellow',
                    textColor: 'black',
                    failure: function (e) {
                        console.log(e);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Não consegui carregar as datas',
                        })
                    },
                },
                {
                    url: '/evento/devolucao',
                    method: 'GET',
                    color: 'green',
                    textColor: 'white',
                    failure: function (e) {
                        console.log(e);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Não consegui carregar as datas',
                        })
                    },
                }
            ],
        });
        calendar.setOption('locale', 'br');
        calendar.render();
    });
</script>