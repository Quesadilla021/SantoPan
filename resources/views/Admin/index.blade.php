@extends('Admin.plantilla')

@section('contenido')
<div class="container">

<div class="row mb-4">
    <div class="col-lg-12 position-relative z-index-2">
        <div class="card card-plain mb-4">
            <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                <h2 class="font-weight-bolder mb-0">Personalizar inicio</h2>
                <div class="d-flex justify-content-center mt-4" style="order: 2;">
                 <button class="btn btn-success">Guardar cambios</button>
                </div>

            </div>
        </div>
    </div>
</div>

<form action="{{-- {{ route('admin.store') }} --}}" method="POST">
    @csrf


<div class="row">

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
                        <input class="form-control" type="text" name="titulo">

                        <div class="mt-3">
                            <label for="Subtitulo">Subtitulo:</label>
                            <input class="form-control" type="text" name="subtitulo">
                        </div>

                        <div class="mt-3">
                            <label for="email">Imagen Principal</label>
                            <input class="form-control" name="logo" type="file" id="imageInput"
                                accept="image/*" onchange="previewImage(event, 'image-Logo', 'conateiner-Logo')">
                        </div>

                        <div id="conateiner-Logo">
                            <img id="image-Logo" src="#" alt="Vista previa de la imagen">
                        </div>

                        <hr>

                        <div class="mt-2">
                            <label for="Subtitulo">Localizacion:</label>
                            <input class="form-control" type="text" name="localizacion">
                        </div>

                        <div class="mt-2">
                            <label for="Subtitulo">Horario de atencion:</label>
                            <input class="form-control" type="text" name="horario">
                        </div>

                        <div class="mt-2">
                            <label for="Subtitulo">Correo electronico:</label>
                            <input class="form-control" type="email" name="correo_electronico">
                        </div>

                        <div class="mt-2">
                            <label for="Subtitulo">Telefono:</label>
                            <input class="form-control" type="text" name="telefono">
                        </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col-6">

        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Seccion Objetivos</h6>
                </div>
            </div>

            <div class="card-header p-3 pt-2">

                <div id="formulario">
                        <label for="Titulo">Titulo objetivo:</label>
                        <input class="form-control" type="text" name="tituloObjetivo">

                        <hr>
                        
                        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                            <label for="Titulo">Objetivo nuevo:</label>
                            <input class="form-control" type="text" name="objetivo">
                            <form action="">
                                <button class="btn btn-success mt-3" style="order: 2;">+</button>
                            </form>
                        </div>

                        <div class="card-body px-0 pb-2">
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
                                        {{-- @foreach ($servicios as $item) --}}
                                            <tr>
                                                <td>
                                                    <div class="align-middle text-center text-sm">
                                                        <h6 class="mb-0 text-sm">Un obndoi andoian dcads</h6>
                                                    </div>
                                                </td>

                                                <td class="d-flex justify-content-center align-middle text-center text-sm">

                                                    <a href="{{-- {{route('editarServicio',$item->id_servicio)}} --}}" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>

                                                    {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                    <a  class="btn btn-outline-primary mx-1"><i class="fa-regular fa-eye"></i></a>

                                                    <form action="{{-- {{ route('servicio.destroy', $item->id_servicio) }} --}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
{{--                                         @endforeach
 --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <hr>


                        <div class="mt-3">
                            <label for="email">Imagen</label>
                            <input class="form-control" name="imagenObjetivo" type="file" id="imageInput"
                                accept="image/*" onchange="previewImage(event, 'image-Logo', 'conateiner-Logo')">
                        </div>

                        <div id="conateiner-Logo">
                            <img id="image-Logo" src="#" alt="Vista previa de la imagen">
                        </div>

                        <div class="mt-3">
                            <label for="email">Imagen de fondo </label>
                            <input class="form-control" name="imagenfondoObjetivo" type="file" id="imageInput"
                                accept="image/*" onchange="previewImage(event, 'image-Logo', 'conateiner-Logo')">
                        </div>

                        <div id="conateiner-Logo">
                            <img id="image-Logo" src="#" alt="Vista previa de la imagen">
                        </div>


                </div>
            </div>
        </div>
    </div>


    <div class="col-6 mt-3">

        <div class="card">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Seccion Nosotros</h6>
                </div>
            </div>

            <div class="card-header p-3 pt-2">

                <div id="formulario">
                        <label for="Titulo">Titulo Nosotros:</label>
                        <input class="form-control" type="text" name="tituloNosotros">

                        <label for="Titulo">Descripcion</label>
                        <input class="form-control" type="text" name="descripcionNosotros">

                        <hr>
                        
                        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                            <label for="Titulo">Mision Nueva:</label>
                            <input class="form-control" type="text" name="objetivo">
                            <form action="">
                                <button class="btn btn-success mt-3" style="order: 2;">+</button>
                            </form>
                        </div>

                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Mision</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- @foreach ($servicios as $item) --}}
                                            <tr>
                                                <td>
                                                    <div class="align-middle text-center text-sm">
                                                        <h6 class="mb-0 text-sm">Un obndoi andoian dcads</h6>
                                                    </div>
                                                </td>

                                                <td class="d-flex justify-content-center align-middle text-center text-sm">

                                                    <a href="{{-- {{route('editarServicio',$item->id_servicio)}} --}}" class="btn btn-outline-warning"><i class="fa-regular fa-pen-to-square"></i></a>

                                                    {{-- Cargar en otra pagina la landing para mostrar la modal --}}
                                                    <a  class="btn btn-outline-primary mx-1"><i class="fa-regular fa-eye"></i></a>

                                                    <form action="{{-- {{ route('servicio.destroy', $item->id_servicio) }} --}}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="fa-regular fa-trash-can"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
{{--                                         @endforeach
 --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>



 </div>
</form>


@endsection