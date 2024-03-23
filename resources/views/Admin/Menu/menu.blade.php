@extends('Admin.plantilla')

@section('contenido')
    <div class="container">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Menu</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('categorias')}}" class="btn btn-success">Categorias</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">



            <div class="col-4">
                <form action="{{route('agregarPlatillo')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agregar platillo</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label for="Titulo">Titulo</label>
                                <input class="form-control" type="text" name="nombre" required>

                                <label for="Detalles">Detalles</label>
                                <input class="form-control" type="text" name="detalles" required>

                                <label for="Precio">Precio</label>
                                <input class="form-control" type="number" name="precio" required>

                                <label for="Categoria">Categoria</label>
                                <select name="categoria" class="form-select" aria-label="Default select example" required>
                                    <option selected disabled>Seleccione una categoria</option>
                                    @foreach ($categorias as $item)
                                        <option value="{{$item->id_categoria}}">{{$item->nombre}}</option>
                                    @endforeach
                                  </select>

                                <hr>

                                <div class="mt-3">
                                    <label for="email">Imagen</label>
                                    <input class="form-control" name="imagenPlatillo" type="file" id="imageInput"
                                        accept="image/*" onchange="previewImage(event, 'img', 'containerImg')" required>
                                </div>

                                <div id="containerImg">
                                    <img id="img" src="" alt="Vista previa de la imagen" width="100%">
                                </div>

                                <button type="submit" class="btn btn-success mt-4">Agregar</button>

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
                            <h6 class="text-white text-capitalize ps-3">Platillos</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">

                        <hr>

                        <div class="table-responsive m-3">

                            <table id="tabla_platillos" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="text-center" >Platillo</th>
                                        {{-- <th class="text-center" >Detalles</th> --}}
                                        <th class="text-center" >Categoria</th>
                                        <th class="text-center" >Precio</th>
                                        <th class="text-center" >Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($platillos as $item)
                                        
                                    <tr>
                                        <td class="text-center">{{$item->nombre}}</td>
                                        {{-- <td class="text-center">{{$item->detalles}}</td> --}}
                                        <td class="text-center">{{$item->categoria->nombre}}</td>
                                        <td class="text-center">₡ {{number_format($item->precio, 0,',', '.')}}</td>
                                        <td class="d-flex justify-content-center align-middle text-center text-sm">

                                            <a href="{{route('editarPlatillo',$item->id_platillo)}}" class="btn btn-outline-warning"><i
                                                    class="fa-regular fa-pen-to-square"></i></a>

                                            <form action="{{ route('destroyPlatillo', $item->id_platillo) }}" method="POST">
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
