<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">

    <title>
        Pagina Administrativa
    </title>



    @include('Admin.partes.parteStyle')


    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->


</head>


<body class="g-sidenav-show  bg-gray-100">

    @include('sweetalert::alert')

    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">

        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                target="_blank">
                <img src="./assets/img/logoblancotemp.png" class="navbar-brand-img" style="height: 100%; width: 100%" alt="main_logo">
            </a>
        </div>


        <hr class="horizontal light mt-0 mb-2">


        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav mt-6">
            
                <!-- Split dropright button -->

                
        <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Administrar</h6>
          </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('menu')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-mug-saucer"></i>
                        </div>

                        <span class="nav-link-text ms-1">Menu</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('reservaciones')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-regular fa-address-book"></i>
                        </div>

                        <span class="nav-link-text ms-1">Reservaciones</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white " href="{{route('ubicaciones')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-map-location-dot"></i>
                        </div>

                        <span class="nav-link-text ms-1">Zonas</span>
                    </a>
                </li>

{{--                 <li class="nav-item">
                    <a class="nav-link text-white " href="">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-user"></i>
                        </div>

                        <span class="nav-link-text ms-1">Usuarios</span>
                    </a>
                </li> --}}

                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Personalizar Inicio</h6>
                  </li>

                  <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('inicio')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Vista principal</span>
                    </a>
                  </li>

                <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('objetivos')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Seccion Objetivos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('nosotros')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Seccion Nosotros</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('eventos')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Seccion Eventos</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('personal')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Seccion Personal</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="dropdown-item nav-link text-white " href="{{route('galeria')}}">

                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>

                        <span class="nav-link-text ms-1">Seccion Galeria</span>
                    </a>
                </li>

            </ul>
        </div>


    </aside>

    <main class="main-content border-radius-lg ">
        <!-- Navbar -->

        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <h3 class="font-weight-bolder mb-0">Administración Santo Pan</h3>

                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">



                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 mt-3 d-flex align-items-center">
                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">

                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="sumbit" class="btn btn-primary">Cerrar Sesion</button>
                                </form>
        
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <hr class="dark horizontal">

        @yield('contenido')


        <footer class="footer py-4">
            <div class="container-fluid text-center">
                <div class="row">
                    <div class="col-12 mb-lg-0 mb-2 text-center">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            By Ian Quesada Mejia
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        </div>


    </main>



    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>
        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Informacion Santo Pan WEB</h5>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>



                <a class="btn btn-outline-dark w-100 mt-3"
                    href="./assets/vendor/documentacion/Manual de usuario Santo Pan.pdf" target="_blank" download="Manual de usuario Santo Pan.pdf">Descargar Manual de usuario</a>

{{--                 <div class="w-100 text-center">

                    <h6 class="mt-3">Thank you for sharing!</h6>

                    <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>

                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>

                </div> --}}
            </div>
        </div>
    </div>

   @include('Admin.partes.parteScript')
    
</body>

</html>
