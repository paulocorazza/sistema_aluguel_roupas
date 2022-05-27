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








function setClotheCode(event) {
  //aqui consigo o codigo da roupa
  let codigo = event.id;
  let dress_code = document.getElementById("clothe_code");
  dress_code.value = codigo;
  let rentPrice = document.getElementById("rentPrice");
  let clotheId = document.getElementById("clothe_id");
  let clothe_code = $('#clothe_code').val();
 
  $.ajax({
      type:'POST',
      url:'/App/utils/getClotheData.php',
      dataType: "json",
      data:{clothe_code:clothe_code},
      success:function(data){
          if(data.status == 'ok'){
              $('#rentPrice').text(data.result.rentPrice);
          } else {
              alert("Roupa não encontrada");
          } 
          rentPrice.value = data.result.rentPrice;
          clotheId.value =  data.result.id;
          $('#aluguel').text(data.result.rentPrice);
          $('#codigo_roupa').text(codigo);
          console.log("o id da roupa é" + data.result.id);
          console.log("o valor do input é" + clotheId.value);
          console.log("o valor do input do código é " + dress_code.value);
      }
      
  });
}


//aqui seto no input o id da locacao
function setLeaseId(event){
  let id = event.id;
  let lease_item = document.getElementById("lease-item");
  let lease = document.getElementById("lease_id");
  lease_item.innerHTML = `Adicionar item na locação ${id}`;
  lease.value = id;
}

