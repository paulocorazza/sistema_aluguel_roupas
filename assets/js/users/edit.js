let id = document.getElementById("id").value;
$(document).ready(function () {
 $('#user-form').on('submit', function (e){
   $.ajax({
     url: `/views/userEdit.php?id=${id}`,
     data: $(this).serialize(),
     type: 'POST',
     success: function(data){
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