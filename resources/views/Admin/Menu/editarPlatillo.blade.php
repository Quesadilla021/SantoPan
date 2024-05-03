@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Editar platillo</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('menu')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">
                <form action="{{route('upPlatillo', $platillo->id_platillo)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Actualizar platillo</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Titulo</label>
                                <input class="form-control" type="text" name="nombre" value="{{$platillo->nombre}}" required>

                                <label for="Detalles">Detalles</label>
                                <input class="form-control" type="text" name="detalles" value="{{$platillo->detalles}}">

                                <label for="Precio">Precio</label>
                                <input class="form-control" type="number" name="precio" value="{{$platillo->precio}}" required>

                                <label for="Categoria">Categoria</label>
                                <select name="categoria" class="form-select" aria-label="Default select example" required>
                                    <option selected value="{{$platillo->id_categoria}}">{{$platillo->categoria->nombre}}</option>
                                    @foreach ($categorias as $item)
                                        @if ($platillo->id_categoria != $item->id_categoria)
                                            <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>   
                                        @endif
                                    @endforeach
                                  </select>

                                  <div class="mt-3">
                                    <label for="Dia">Platillo del dia:</label>
                                    <select name="dia" class="form-select" aria-label="Default select example" required>
                                        <option selected value="{{$platillo->dia}}">{{$platillo->dia}}</option>
                                            <option value="Todos los dias">Todos los dias</option>
                                            <option value="Lunes">Lunes</option>
                                            <option value="Martes">Martes</option>
                                            <option value="Miercoles">Miercoles</option>
                                            <option value="Jueves">Jueves</option>
                                            <option value="Viernes">Viernes</option>
                                            <option value="Sabado">Sabado</option>
                                            <option value="Domingo">Domingo</option>
                                      </select>
                                    </div>

                                <hr>

                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenPlatillo" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')">
                                </div>

                                <div id="containerImg">
                                    <img id="img" src="{{$platillo->imagen}}" alt="Vista previa de la imagen" width="100%">
                                </div>

                                <button type="submit" class="btn btn-success mt-4" onclick="platilloActualizado()">Actualizar</button>

                            </div>
                        </div>
                    </div>
                </form>

            </div>


            {{-- Tabla Cargar Datos --}}

        </div>
    @endsection
