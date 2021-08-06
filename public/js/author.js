$('.dni').keyup(function () {
    this.value = (this.value + '').replace(/[^0-9]/g, '');
});

$('.edad').keyup(function () {
    this.value = (this.value + '').replace(/[^0-9]/g, '');
});


var meta = $("meta[name='csrf-token']").attr("content");
var urlOrigin = window.location.origin, urlPath = window.location.pathname;
$('.delete').on('click', function(e){
    e.preventDefault();
    var author = $(this).attr('author');
    
    Swal.fire({
        title: '¿Estas seguro de realizar esta acción?',
        text: "¡Una vez eliminado, no podrá recuperar este registro!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar registro!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: urlOrigin+urlPath+"/"+author,
                type: 'DELETE',             
                data: {
                    '_token' : meta,
                    'author' : author
                },
                success: function(results) {

                    
                    window.location = urlOrigin+urlPath;
                 
                    
                    
                },
                cache: false
            });
            
        }
    })
});    
