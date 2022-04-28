$(document).ready(function () {
    $('#lease-form').on('submit', function(e){ 
      $.ajax({
        url: '/views/locacoes.php',
        data: $(this).serialize(),
        type: 'POST',
        success: function(data){
          Swal.fire({
            icon: 'success',
            title: 'Sucessso!',
            text: 'Locação criada com sucesso!',
            confirmButtonText : 'Voltar'
          }).then((result) => {
            if(result.isConfirmed){
              window.location.href = '/views/locacoes.php'
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

