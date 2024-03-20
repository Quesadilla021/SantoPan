@extends('Admin.plantilla')

@section('contenido')
    <div class="container">
        <form action="{{ route('upInObjetivo') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row mb-4">
                <div class="col-lg-12 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3"
                            style="display: flex; justify-content: space-between; align-items: center;">
                            <h2 class="font-weight-bolder mb-0">Personalizar Objetivos</h2>
                            <div class="d-flex justify-content-center mt-4" style="order: 2;">
                                <button type="submit" class="btn btn-success">Guardar cambios</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-6">

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Seccion Objetivos</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Titulo objetivo:</label>
                                <input class="form-control" type="text" name="tituloObjetivo"
                                    value="{{ $inicio->tituloObjetivos }}">

                                <hr>


                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenObjetivo" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>

                                <div id="containerImg">
                                    <img id="img" src="{{ $imagenes->img_objetivo }}" alt="Vista previa de la imagen"
                                        width="100%">
                                </div>

                                <div class="mt-3">
                                    <label for="email">Imagen de fondo </label>
                                    <input class="form-control" name="imagenfondoObjetivo" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'imgFondo', 'containerFondo')">
                                </div>

                                <div id="containerFondo">
                                    <img id="imgFondo" src="{{ $imagenes->img_fondo_objetivo }}"
                                        alt="Vista previa de la imagen" width="100%">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </form>



        {{-- Tabla Cargar Datos --}}
        <div class="col-6">
            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Objetivos creados</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">

                    
                    <form action="{{ route('agregarObjetivo') }}" method="POST">
                        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">

                            <label for="Titulo">Objetivo nuevo:</label>
                            @csrf
                            <input class="form-control" type="text" name="objetivo" style="order: 1;">
                            <button type="submit" class="btn btn-success mt-3" style="order: 2;">+</button>
                        </div>

                    </form>

                <hr>

                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Objetivo</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($objetivos as $item)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{ $item->objetivo }}</h6>
                                            </div>
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <a href="{{-- {{route('editarServicio',$item->id_servicio)}} --}}" class="btn btn-outline-warning"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>

                                            <form action="{{-- {{ route('servicio.destroy', $item->id_servicio) }} --}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="fa-regular fa-trash-can"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
