$('.author').select2();

var meta = $("meta[name='csrf-token']").attr("content");
var urlOrigin = window.location.origin, urlPath = window.location.pathname;

$('.delete').on('click', function(e){
    e.preventDefault();
    var book = $(this).attr('book');
    
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
                url: urlOrigin+urlPath+"/"+book,
                type: 'DELETE',             
                data: {
                    '_token' : meta,
                    'book' : book
                },
                success: function(results) {

                    
                    window.location = urlOrigin+urlPath;
                 
                    
                    
                },
                cache: false
            });
            
        }
    })
});    