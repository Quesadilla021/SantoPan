<script>
    function previewImage(event, pImage, pContainer) {
        console.log(pImage);
        console.log(pContainer);
        var input = event.target;
        var previewImage = document.getElementById(pImage);
        var previewContainer = document.getElementById(pContainer);

        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewContainer.style.display = 'block';
            };

            reader.readAsDataURL(file);
        } else {
            previewImage.src = '#';
            previewContainer.style.display = 'none';
        }
    }
</script>

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js"></script>
<script src="./assets/js/core/bootstrap.min.js"></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script > new DataTable('#dataTable');</script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    function platilloAgregado() {
    Swal.fire(
    '¡Platillo Agregado!',
    'En breves notara los cambios',
    'success'
)
}

function platilloActualizado() {
    Swal.fire(
    '¡Platillo Actualizado!',
    'En breves notara los cambios',
    'success'
)
}

function ObjetivoNuevo() {
    Swal.fire(
    '¡Objetivo Agregado!',
    'En breves notara los cambios',
    'success'
)
}

function ObjetivoEliminado() {
    Swal.fire(
    '¡Objetivo Eliminado!',
    'En breves notara los cambios',
    'success'
)
}


function CambiosRealizado() {
    Swal.fire(
    '¡Cambios Realizados!',
    'En breves notara los cambios en la pagina principal',
    'success'
)
}

function MisionAgregada() {
    Swal.fire(
    '¡Mision Agregada!',
    'En breves notara los cambios',
    'success'
)
}

function CategoriaAgregada() {
    Swal.fire(
    '¡Categoria Agregada!',
    'En breves notara los cambios',
    'success'
)
}

function mostrarImagen(urlImage) {
    Swal.fire({
        imageUrl: urlImage,
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "A tall image"
});
}

function EliminarCategoria(ev) {
     Swal.fire({
        title: 'Eliminar categoria',
        text: "Al eliminarla se eliminaran todos los platillos con esta categoria",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Terminar'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Se elimino correctatemente',
            'En breves notara los cambios',
            'success'
            )
            setTimeout( function() { window.location.href = "{{route('destroyCategoria', "+id+")}}"; }, 2000 );
        }
     })
    }

    function confirmation(ev) {
    ev.preventDefault();
    var urlToRedirect = ev.currentTarget.getAttribute('href');  
    console.log(urlToRedirect); 
    swal({
        title: "Are you sure to Delete this post",
        text: "You will not be able to revert this!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
    .then((willCancel) => {
        if (willCancel) {


             
            window.location.href = urlToRedirect;
           
        }  


    });

    
}

</script>

<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js" integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    Dropzone.options.myAwesomeDropzone = {
            headers:{
                'X-CSRF-TOKEN' : "{{csrf_token()}}"
            },

            dictDefaultMessage: "Presione o Arrastre las imagenes que desea subir",
            acceptedFiles: "image/*",
            maxFilesize: 12,
        };
</script>