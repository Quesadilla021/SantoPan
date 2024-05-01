@extends('Admin.plantilla')

@section('contenido')
    <div class="container-fluid py-4">

        <div class="row mb-4">
            <div class="col-lg-12 position-relative z-index-2">
                <div class="card card-plain mb-4">
                    <div class="card-body p-3" style="display: flex; justify-content: space-between; align-items: center;">
                        <h2 class="font-weight-bolder mb-0">{{$ubicacion->nombre}} - Subir Fotos</h2>
                        <div class="d-flex justify-content-center mt-4" style="order: 2;">
                            <a href="{{route('ubicaciones')}}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">

            <div class="col-6">
                    <div class="card">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Agregar Fotos</h6>
                            </div>
                        </div>

                        <div class="card-header p-3 pt-2">
                            <form action="{{route('agregarFotosUbi', $ubicacion->id_ubicacion)}}"
                                    method="POST"
                                    class="dropzone"
                                    id="my-awesome-dropzone"></form>

                        </div>
                    </div>

            </div>
        </div>
    @endsection
