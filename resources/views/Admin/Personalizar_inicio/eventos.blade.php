@extends('Admin.plantilla')

@section('contenido')
    <div class="container">

        <form action="{{route('upInEventos')}}" method="POST">
            @method('PUT')
            @csrf
        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Personalizar Eventos</h2>
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
                            <h6 class="text-white text-capitalize ps-3">Seccion Eventos</h6>
                        </div>
                    </div>

                    <div class="card-header p-3 pt-2">
                            <label for="Titulo">Titulo Eventos:</label>
                            <input class="form-control" type="text" name="tituloEventos" value="{{$inicio->tituloEventos}}">
                            <hr>
                        </form>

                        <div id="formulario">

                            <form action="{{route('agregarEvento')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label for="Titulo">Nuevo Evento</label>
                                <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                                    <label for="Titulo">Titulo:</label>
                                    <input class="form-control" type="text" name="tituloEvento" required>
                                </div>
        
                                <div class="container mt-3" style="display: flex; justify-content: space-between; align-items: center;">
                                    <label for="Titulo">Fecha:</label>
                                    <input class="form-control" type="date" name="fechaEvento" required>
                                </div>
        
                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenEvento" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>
        
                                <div id="containerImg">
                                    <img id="img" src="" alt="Vista previa de la imagen"
                                        width="100%">
                                </div>
                                
                                <label for="Titulo">Descripcion:</label>
                                <textarea name="descripcionEvento" class="form-control" type="text" rows="10" cols="50" required></textarea>
                                
                                <button type="submit" class="btn btn-success mt-4" onclick="MisionAgregada()">Agregar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Eventos creados</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
    
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Evento</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Fecha</th>    
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventos as $item)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$item->nombre}}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$item->fecha}}</h6>
                                            </div>
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <a href="{{route('editarEvento', $item->id_evento)}}" class="btn btn-outline-warning"><i
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
    </div>
    @endsection
