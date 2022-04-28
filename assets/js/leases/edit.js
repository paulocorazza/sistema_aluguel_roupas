let id = document.getElementById("id").value;
$(document).ready(function () {
 $('#lease-form').on('submit', function (e){
   $.ajax({
     url: `/views/leaseEdit.php?id=${id}`,
     data: $(this).serialize(),
     type: 'POST',
     success: function(data){
       Swal.fire({
         icon: 'success',
         title: 'Sucessso!',
         text: 'Locaçāo alterado com sucesso!',
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

function setClotheCode(event){

  //aqui consigo o codigo da roupa
  let codigo = event.id;
  let dressCode = document.getElementById("dressCode");
  dressCode.value = codigo;

  //aqui consigo o id da roupa
  let dressId = document.querySelector('.photo').id;
  let clothe_id = document.getElementById("clothe_id");
  clothe_id.value = dressId;

  //aqui consigo o valor de aluguel
  let lease = document.getElementById("lease");
  lease.value = id;
  let rent = document.querySelector('.rent').id;
  let rentPrice = document.getElementById("rent");
  rentPrice.value = rent;
}

//aqui seto no input o id da locacao
function setLeaseId(event){
  let id = event.id;
  let lease_item = document.getElementById("lease-item");
  lease_item.innerHTML = `Adicionar item na locação ${id}`;
  let lease = document.getElementById("lease");
  lease.value = id;
}

