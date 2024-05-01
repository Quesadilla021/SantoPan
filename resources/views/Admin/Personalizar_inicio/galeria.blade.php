@extends('Admin.plantilla')

@section('contenido')
    <div class="container">
        <form action="{{ route('upInGaleria') }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row mb-4">
                <div class="col-lg-12 position-relative z-index-2">
                    <div class="card card-plain mb-4">
                        <div class="card-body p-3"
                            style="display: flex; justify-content: space-between; align-items: center;">
                            <h2 class="font-weight-bolder mb-0">Personalizar Galeria</h2>
                            <div class="d-flex justify-content-center mt-4" style="order: 2;">
                                <button type="submit" class="btn btn-success" onclick="CambiosRealizado()">Guardar cambios</button>
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
                                <h6 class="text-white text-capitalize ps-3">Seccion Galeria</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Titulo objetivo:</label>
                                <input class="form-control" type="text" name="tituloGaleria"
                                    value="{{ $inicio->tituloGaleria }}">

                                <hr>

                                <div class="d-flex justify-content-center mt-4">
                                    <a href="{{route('imgNuevas')}}" class="btn btn-success">Agregar fotos</a>
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

                    <div class="table-responsive p-0 m-2">
                        <table id="dataTable" class="table table-light table-striped align-items-center" style="width:100%">
                            <thead>
                                <tr>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Imagen</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Acciones</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($galeria as $item)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <a class="btn btn-outline-info" onclick="mostrarImagen('{{$item->imagen}}')"><i class="fa-solid fa-eye"></i></a>      
                                            </div>
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">
                                            
                                            <form action="{{route('destroyGaleria', $item->id_galeria)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-outline-danger"><i
                                                        class="fa-regular fa-trash-can" onclick="ObjetivoEliminado()"></i></button>
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
