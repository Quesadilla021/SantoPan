@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">Reservacion de {{$reservacion->nombre}}</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('reservaciones')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6"> {{-- ENVIAR CORREO DESDE AQUI --}}'
                <form action="{{-- {{route('upPlatillo', $platillo->id_platillo)}} --}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Solicitud de mesa</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <div id="formulario">
                                <label>Nombre Completo</label>
                                <input class="form-control" type="text"  value="{{$reservacion->nombre}}" disabled>

                                <label>Correo Electronico</label>
                                <input class="form-control" type="email"  value="{{$reservacion->correo_electronico}}" disabled>
                                
                                <label>Telefono</label>
                                <input class="form-control" type="text"  value="{{$reservacion->telefono}}" disabled>
                                
                                {{-- FECHA DE SOLICITUD Y OTRA FECHA DE RECIBIDO --}}
                                <label>Fecha</label>
                                <input class="form-control" type="date"  value="{{$reservacion->fecha}}" disabled>
                                
                                <label>Hora</label>
                                <input class="form-control" type="text"  value="{{$reservacion->hora}}" disabled>
                                
                                <label>Numero de personas</label>
                                <input class="form-control" type="text"  value="{{$reservacion->num_personas}}" disabled>

                                <label for="Titulo">Mensaje</label>
                                <textarea class="form-control" type="text" rows="10" cols="50" disabled>{{$reservacion->mensaje}}</textarea>

                                <div class="container text-center">
                                    <button type="submit" class="btn btn-success mt-4">Aceptar Solicitud</button>
                                    <button type="submit" class="btn btn-danger mt-4">Rechazar Solicitud</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </form>

            </div>


            {{-- Tabla Cargar Datos --}}

        </div>
    @endsection