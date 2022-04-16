let id = document.getElementById("id").value;
$(document).ready(function () {
 $('#dress-form').on('submit', function (e){
   $.ajax({
     url: `/views/dressEdit.php?id=${id}`,
     data: $(this).serialize(),
     type: 'POST',
     success: function(data){
       Swal.fire({
         icon: 'success',
         title: 'Sucessso!',
         text: 'Vestido alterado com sucesso!',
         confirmButtonText : 'Voltar'
       }).then((result) => {
         if(result.isConfirmed){
           window.location.href = '/views/vestidos.php'
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