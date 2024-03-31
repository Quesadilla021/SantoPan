@extends('Admin.plantilla')

@section('contenido')
    <div class="container">
    <form action="{{ route('updateInicio') }}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Personalizar inicio</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <button type="submit" class="btn btn-success" onclick="CambiosRealizado()">Guardar cambios</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Seccion inicial</h6>
                            </div>
                        </div>
                        <div class="card-header p-3 pt-2">

                            <div id="formulario">
                                <label for="Titulo">Titulo principal:</label>
                                <input class="form-control" type="text" name="titulo" value="{{$inicio->titulo}}">

                                <div class="mt-3">
                                    <label for="Subtitulo">Subtitulo:</label>
                                    <input class="form-control" type="text" name="subtitulo" value="{{$inicio->subTitulo}}">
                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen Principal</label>
                                    <input class="form-control" name="imagenPrincipal" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'imgContainer')">
                                </div>

                                <div id="imgContainer">
                                    <img id="img" src="{{$imagenPrincipal->img_principal}}" alt="Vista previa de la imagen" width="100%">
                                </div>

                                <hr>

                                <div class="mt-2">
                                    <label for="Subtitulo">Localizacion:</label>
                                    <input class="form-control" type="text" name="localizacion" value="{{$inicio->localizacion}}">
                                </div>

                                <div class="mt-2">
                                    <label for="Subtitulo">Horario de atencion:</label>
                                    <input class="form-control" type="text" name="horario" value="{{$inicio->horario}}">
                                </div>

                                <div class="mt-2">
                                    <label for="Subtitulo">Correo electronico:</label>
                                    <input class="form-control" type="email" name="correo_electronico" value="{{$inicio->correo_electronico}}">
                                </div>

                                <div class="mt-2">
                                    <label for="Subtitulo">Telefono:</label>
                                    <input class="form-control" type="text" name="telefono" value="{{$inicio->telefono}}">
                                </div>

                            </div>
                        </div>

                    </div>
            </div>

        </div>
        </form>
    @endsection
