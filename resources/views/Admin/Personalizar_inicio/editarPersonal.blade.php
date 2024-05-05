@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Editar Personal</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('personal')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">
                <form action="{{route('upPersonal', $personal->id_personal)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Actualizar personal</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="{{$personal->nombre}}" required>

                                <label for="Detalles">Rol</label>
                                <input class="form-control" type="text" name="rol" value="{{$personal->rol}}" required>
                         
                                <label for="Detalles">Facebook</label>
                                <input class="form-control" type="text" name="facebook" value="{{$personal->facebook}}">
                                
                                <label for="Detalles">Instagram</label>
                                <input class="form-control" type="text" name="instagram" value="{{$personal->instagram}}">

                                <hr>

                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenPersonal" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>

                                <div id="containerImg">
                                    <img id="img" src="{{$personal->imagen}}" alt="Vista previa de la imagen" width="100%">
                                </div>

                                <button type="submit" class="btn btn-success mt-4">Actualizar</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>


            {{-- Tabla Cargar Datos --}}

        </div>
    @endsection
