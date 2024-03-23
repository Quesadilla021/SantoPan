@extends('Admin.plantilla')

@section('contenido')


<div class="container">

    <div class="row mb-4">
        <div class="col-lg-12 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                    <h2 class="font-weight-bolder mb-0">Reservaciones</h2>
{{--                     <div class="d-flex justify-content-center mt-4" style="order: 2;">
                     <button class="btn btn-success">Guardar cambios</button>
                    </div> --}}
    
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Lista reservaciones</h6>
            </div>
        </div>
        <div class="card-body px-0 pb-2">

            <hr>

            <div class="table-responsive m-3">

                <table id="tabla_platillos" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center" >Nombre Completo</th>
                            <th class="text-center" >Correo Electronico</th>
                            <th class="text-center" >Telefono</th>
                                {{-- FECHA DE SOLICITUD Y OTRA FECHA DE RECIBIDO --}}

                            <th class="text-center" >Fecha</th>
                            {{-- <th>Hora</th> --}}
                            <th class="text-center">Numero de personas</th>
                            {{-- <th>Mensaje</th> --}}
                            <th class="text-center">Estado</th>
                            <th class="text-center">Ver solicitud</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($reservaciones as $item)
                            
                        <tr>
                            <td class="text-center">{{$item->nombre}}</td>
                            <td class="text-center">{{$item->correo_electronico}}</td>
                            <td class="text-center">{{$item->telefono}}</td>
                            <td class="text-center">{{$item->fecha}}</td>
                            <td class="text-center">{{$item->num_personas}}</td>
                            @switch($item->estado)
                                @case('Aprobado')
                                    <td class="text-center" style="color: green">{{$item->estado}}</td>

                                    @break
                                @case('Rechazado')
                                    <td class="text-center" style="color: red">{{$item->estado}}</td>
                                    
                                    @break
                                @default
                                    <td class="text-center" style="color: orange">{{$item->estado}}</td>
                                    
                            @endswitch

                            <td class="d-flex justify-content-center align-middle text-center text-sm">

                                <a href="{{route('verSolicitud',$item->id_reservacion)}}" class="btn btn-outline-success">
                                    <i class="fa-solid fa-eye"></i></a>

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
