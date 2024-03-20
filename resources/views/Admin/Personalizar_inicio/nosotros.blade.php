@extends('Admin.plantilla')

@section('contenido')
    <div class="container">

        <form action="{{route('upInNosotros')}}" method="POST">
            @method('PUT')
            @csrf
        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Personalizar Nosotros</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <button type="submit" class="btn btn-success">Guardar cambios</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>



            <div class="card">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Seccion Nosotros</h6>
                    </div>
                </div>

                <div class="card-header p-3 pt-2">

                    <div id="formulario">
                        <label for="Titulo">Titulo Nosotros:</label>
                        <input class="form-control" type="text" name="tituloNosotros" value="{{$inicio->tituloNosotros}}">
                        <hr>
                    </form>

                    <form action="{{route('agregarMision')}}" method="POST">
                        @csrf
                        <label for="Titulo">Nueva mision</label>
                        <div class="container" style="display: flex; justify-content: space-between; align-items: center;">
                            <label for="Titulo">Titulo:</label>
                            <input class="form-control" type="text" name="tituloMision">
                        </div>
                        
                        <label for="Titulo">Descripcion:</label>
                        <textarea name="descripcionMision" class="form-control" type="text" rows="10" cols="50"></textarea>
                        
                        <button type="submit" class="btn btn-success mt-4">Agregar</button>
                    </form>

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
                                                Descripcion</th>
                                            <th
                                                class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                Acciones</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($misiones as $item)
                                        <tr>
                                            <td>
                                                <div class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">{{$item->titulo}}</h6>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm">{{$item->descripcion}}</h6>
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
    @endsection
