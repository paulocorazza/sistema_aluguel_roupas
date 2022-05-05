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
         text: 'Locaçāo alterada com sucesso!',
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

$(document).ready(function () {
  $('#lease_item_form').on('submit', function (e){
    $.ajax({
      url: `/views/leaseEdit.php?id=${id}`,
      data: $(this).serialize(),
      type: 'POST',
      success: function(data){
        Swal.fire({
          icon: 'success',
          title: 'Sucessso!',
          text: 'Item inserido com sucesso!',
          confirmButtonText : 'Voltar'
        }).then((result) => {
          if(result.isConfirmed){
            window.location.href = `/views/leaseEdit.php?id=${id}`;
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

function setClotheCode(){

  $(document).on("click",function(event){    
    
    let dressCode = document.getElementById("dress_code");
    dressCode.value = event.target.id;
    console.log("o código da roupa é: "+dressCode.value);
   
    let clothe_id = document.getElementById("clothe_id");
    clothe_id.value = event.target.name;
    console.log(clothe_id.value);

    let rentPrice = document.getElementById("rentPrice");
    rentPrice.value = event.target.className;
    console.log(rentPrice.value);

  })

  
 
}
//aqui seto no input o id da locacao
function setLeaseId(event){
  let id = event.id;
  let lease_item = document.getElementById("lease-item");
  lease_item.innerHTML = `Adicionar item na locação ${id}`;
  let lease = document.getElementById("lease_id");
  lease.value = id;
  console.log(lease.value);
}

