@extends('Admin.plantilla')

@section('contenido')
    <div class="container">

        <form action="{{route('upInPersonal')}}" method="POST">
            @method('PUT')
            @csrf
        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Personalizar Personal</h2>
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
                            <h6 class="text-white text-capitalize ps-3">Seccion Personal</h6>
                        </div>
                    </div>

                    <div class="card-header p-3 pt-2">
                            <label for="Titulo">Titulo Personal:</label>
                            <input class="form-control" type="text" name="tituloPersonal" value="{{$inicio->tituloPersonal}}">
                            <hr>
                        </form>

                        <div id="formulario">

                            <form action="{{route('agregarPersonal')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="container" >
                                    <label for="Titulo">Nombre:</label>
                                    <input class="form-control" type="text" name="nombrePersonal" required>
                                </div>
        
                                <div class="container mt-3" >
                                    <label for="Titulo">Rol de la persona</label>
                                    <input class="form-control" type="text" name="rolPersonal" required>
                                </div>

                                <div class="container mt-3" >
                                    <label for="Titulo">Faceboock</label>
                                    <input class="form-control" type="text" name="facePersonal">
                                </div>

                                <div class="container mt-3" >
                                    <label for="Titulo">Instagram</label>
                                    <input class="form-control" type="text" name="intsaPersonal">
                                </div>
        
                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenPersonal" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>
        
                                <div id="containerImg">
                                    <img id="img" src="" alt="Vista previa de la imagen"
                                        width="100%">
                                </div>
                                
                                <button type="submit" class="btn btn-success mt-4">Agregar</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6">
                
                <div class="card">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Personal creados</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
    
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Personal</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            rol</th>    
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Acciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personal as $item)
                                    <tr>
                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$item->nombre}}</h6>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="align-middle text-center text-sm">
                                                <h6 class="mb-0 text-sm">{{$item->rol}}</h6>
                                            </div>
                                        </td>

                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <a href="{{route('editarPersonal', $item->id_personal)}}" class="btn btn-outline-warning"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>

                                            <form action="{{ route('destroyPersonal', $item->id_personal) }}" method="POST">
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
