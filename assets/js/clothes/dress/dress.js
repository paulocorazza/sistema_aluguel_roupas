$(document).ready(function(e){
    $("#dress-form").on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/views/vestidos.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
  success: function (data) {
        console.log(data);
        Swal.fire({
            icon: 'success',
            title: 'Sucessso!',
            text: 'Vestido Criado com sucesso!',
            confirmButtonText: 'Voltar'
        }).then((result) => {
            if (result.isConfirmed) {
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
    });
    //file type validation
    $("#photo").change(function() {
        var file = this.files[0];
        var imagefile = file.type;
        var match= ["image/jpeg","image/png","image/jpg"];
        if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2]))){
            alert('Please select a valid image file (JPEG/JPG/PNG).');
            $("#photo").val('');
            return false;
        }
    });
});