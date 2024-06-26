@extends('Admin.plantilla')

@section('contenido')
    <div class="container">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Zonas Santo Pan</h2>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-4">
                <form action="{{route('agregarUbicacion')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agregar Zona nueva</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div class="container">
                                <div class="mt-3">
                                    <label for="Titulo">Titulo:</label>
                                    <input class="form-control" type="text" name="nombre" placeholder="Ingrese nombre de la ubicacion nueva" required>
                                </div>

                                <button type="submit" class="btn btn-success mt-4" onclick="platilloAgregado()">Agregar</button>

                            </div>
                        </div>
                    </div>
                </form>
            </div>



            {{-- Tabla Cargar Datos --}}
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
                                        <th class="text-center" >Zona</th>
                                        <th class="text-center" >Agregar fotos</th>
                                        <th class="text-center" >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($ubicaciones as $item)
                                        
                                    <tr>
                                        <td class="text-center">{{$item->nombre}}</td>

                                        <td class="text-center">
                                            <a href="{{route('fotosUbicacion', $item->id_ubicacion)}}" class="btn btn-outline-success"><i class="fa-solid fa-image"></i></a>
                                            
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <a href="{{route('editarUbicacion', $item->id_ubicacion)}}" class="btn btn-outline-warning"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>

                                            <form action="{{route('eliminarUbicacion', $item->id_ubicacion)}}" method="POST">
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
