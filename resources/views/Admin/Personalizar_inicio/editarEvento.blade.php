@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Editar Evento</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('eventos')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">
                <form action="{{route('upEvento', $evento->id_evento)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Actualizar Evento</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Titulo</label>
                                <input class="form-control" type="text" name="tituloEvento" value="{{$evento->nombre}}" required>

                                <label for="Precio">Fecha</label>
                                <input class="form-control" type="date" name="fechaEvento" value="{{$evento->fecha}}" required>

                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenEvento" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>

                                <div id="containerImg">
                                    <img id="img" src="{{$evento->imagen}}" alt="Vista previa de la imagen" width="100%">
                                </div>

                                
                                <label for="Titulo">Descripcion:</label>
                                <textarea name="descripcionEvento" class="form-control" type="text" rows="10" cols="50" required>{{$evento->descripcion}}</textarea>

                                <button type="submit" class="btn btn-success mt-4" onclick="platilloActualizado()">Actualizar</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>


            {{-- Tabla Cargar Datos --}}

        </div>
    @endsection
