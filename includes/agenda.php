<div class="row">
    <div class="col-md-12">
        <div id="calendar">
        </div>
    </div>
</div>

<script>
       document.addEventListener('DOMContentLoaded', function () {
        let calendarEl = document.getElementById('calendar');
        let calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            themeSystem: 'bootstrap',
            locale: 'pt-br',
            navLinks: true,
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridDay'
            },
            dayMaxEvents: true,
            nowIndicator: true,
            
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
        calendar.setOption('locale', 'pt-br');
        calendar.render();
    });
</script>