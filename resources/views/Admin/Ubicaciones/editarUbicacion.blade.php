@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Editar Zona</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('ubicaciones')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-4">
                <form action="{{route('upUbicacion', $ubicacion->id_ubicacion)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Actualizar Zona</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Nombre</label>
                                <input class="form-control" type="text" name="nombre" value="{{$ubicacion->nombre}}" required>

                                <button type="submit" class="btn btn-success mt-4" onclick="platilloActualizado()">Actualizar</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>
            
            <div class="col-8">
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Zonas Agregadas</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive m-2">

                            <table id="tabla_platillos" class="table table-light table-striped align-items-center mb-0" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" >Foto</th>
                                        <th class="text-center" >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($imagenes as $item)
                                        
                                    <tr>
                                        <td class="text-center">
                                            <a class="btn btn-outline-info" onclick="mostrarImagen('{{$item->imagen}}')"><i class="fa-solid fa-eye"></i></a>      
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <form action="{{route('eliminarFotoUbi', $item->id_img_ubicacion)}}" method="POST">
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




            {{-- Tabla Cargar Datos --}}

        </div>
    @endsection
