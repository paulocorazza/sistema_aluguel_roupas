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
