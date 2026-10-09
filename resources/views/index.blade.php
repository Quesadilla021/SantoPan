
<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TZ7XQXKB');</script>
<!-- End Google Tag Manager -->
    
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Santo Pan | Cafeteria & Panaderia</title>
  <meta name="description" content="Estación Santo Pan es uno de los mejores restaurantes en Turrialba. Ofrecemos pan artesanal, café y una experiencia única para quienes buscan dónde comer en Turrialba.">
  <meta name="keywords" content="restaurante Turrialba, donde comer en Turrialba, los mejores restaurantes Turrialba, panadería Turrialba, comida artesanal Turrialba">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    
        <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZ7XQXKB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

  @include('sweetalert::alert')

  
  <style>
    #hero {
      width: 100%;
      height: 100vh;
      background: url("{{$imagenes->img_principal}}") top center;
      background-size: cover;
      position: relative;
      padding: 0;
    }

    .about {
      background: url("{{$imagenes->img_fondo_objetivo}}") center center;
      background-size: cover;
      position: relative;
      padding: 80px 0;
    }

  </style>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
      <div class="container d-flex justify-content-center justify-content-md-between">
  
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-phone d-flex align-items-center"><span>{{$inicio->telefono}}</span></i>
          <i class="bi bi-clock d-flex align-items-center ms-4"><span>{{$inicio->horario}}</span></i>
        </div>
  
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      {{-- <h1 class="logo me-auto me-lg-0"><img src="assets/img/logo2.png" alt=""></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#events">Noticias</a></li>
          <li><a class="nav-link scrollto" href="#about">Nosotros</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Buffet</a></li>
          <li><a class="nav-link scrollto" href="#zonas">Zonas</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>

          {{-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="nav-link scrollto" href="#contact">Contactenos</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservar Mesa</a>

    </div>
  </header><!-- End Header -->


  <a href="https://api.whatsapp.com/send?phone={{$inicio->telefono}}" class="btn-wsp" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <a href="https://www.facebook.com/bySantoPan" class="btn-face" target="_blank">
    <i class="fa-brands fa-facebook"></i>
  </a>

  <a href="https://www.instagram.com/santopan_turrialba/" class="btn-insta" target="_blank">
    <i class="fa-brands fa-instagram"></i>
  </a>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1 style="color: #cda45e">{{$inicio->titulo}}</h1>
          <h2>{{$inicio->subTitulo}}</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservar Mesa</a>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

      <!-- ======= Events Section ======= -->
      <section id="events" class="events">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Noticias</h2>
            <p>{{$inicio->tituloEventos}}</p>
          </div>
  
          <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
            @foreach ($eventos as $item)
                
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="{{$item->imagen}}" class="img-fluid" alt="" style="width: 650px; height: 380px;">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>{{$item->nombre}}</h3>
                    <h4>{{$item->fecha}}</h4>
                    <p class="fst-italic" style:"text-align: justify;">
                      {{$item->descripcion}}
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
              @endforeach
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
      </section><!-- End Events Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{$imagenes->img_objetivo}}" alt="" width="100%" style="height: 400px;">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>{{$inicio->tituloObjetivos}}</h3>
            <p class="fst-italic">
              Tenemos claro ciertos objetivos para lograr cumplir nuestra vision
            </p>
            <ul>
              @foreach ($objetivos as $item)
              
              <li><i class="bi bi-check-circle"></i>{{$item->objetivo}}</li>

              @endforeach
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>¿Por que nosotros?</h2>
          <p>{{$inicio->tituloNosotros}}</p>
        </div>

        <div class="row">

          @foreach ($nosotros as $item) {{-- Mantener tamano para los cuadros tal vez --}}
              
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h4>{{$item->titulo}}</h4>
              <p>{{$item->descripcion}}</p>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>{{$inicio->tituloMenu}}</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">Todos</li>
              @foreach ($categorias as $item)
            @php
              $nombreCate = str_replace(" ","", $item->nombre);
            @endphp
                <li data-filter=".filter-{{$nombreCate}}">{{$item->nombre}}</li>
              @endforeach
            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          @foreach ($platillos as $item)
          
         @php
              $nombreCate = str_replace(" ","", $item->categoria->nombre);
          @endphp
          
            <div class="menu-item filter-{{$nombreCate}}">
              <div class="menu-content">
                <a href="#">{{$item->nombre}}</a><span>₡ {{number_format($item->precio, 0,',', '.')}}</span>
              </div>
              <div class="menu-ingredients">
                {{$item->detalles}}
              </div>
            </div>
          @endforeach



        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Buffet</h2>
          <p>Presentamos nuestro Buffet los fin de semana</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Buffet - Desayunos</a>
                </li>

            </ul>
          </div>


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                            <h2>Buffet - Desayunos</h2>
                            <p><strong>7am - 11am</strong></p>
                            <p>¡Descubre la deliciosa experiencia matutina que te espera en el café y restaurante Santo Pan en Turrialba! Nuestro buffet de desayuno es un festín para los sentidos, donde cada bocado es un homenaje a la frescura y la calidad.</p>
                            <p>Desde exquisitas frutas tropicales hasta pan recién horneado, pasando por una variedad de opciones saludables y tentadoras, nuestro buffet está diseñado para satisfacer todos los paladares y garantizar un comienzo perfecto para tu día.</p>
                            <p>Sumérgete en un ambiente acogedor y disfruta de la combinación perfecta de sabores locales e internacionales, todo preparado con el amor y la pasión que nos distinguen en Santo Pan.</p>
                            <p>¡Ven y únete a nosotros para una experiencia gastronómica que despertará tus sentidos y te dejará con ganas de más!</p>
                            <p><strong>Sábados y Domingos</strong></p>
                            <p><strong>7:00am - 11:30am</strong></p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="/storage/imagenes/imgebuffet.webp" alt="" class="img-fluid" style="width: 300px; height: 420px;">
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>

      </div>
      
      
          <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Nuestra promocion de Baguette</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">



          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Baguettes 3 x ₡900</a>
                </li>

            </ul>
          </div>


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3>Baguettes 3 x ₡900</h3>
                                <p>Disfruta de la mejor baguette en Turrialba</p>
                                <p>En Santo Pan, estamos orgullosos de ofrecerte una promoción imperdible: <strong>¡Tres baguettes por solo ₡900!</strong> Desde 1926, nos dedicamos a elaborar pan fresco de la más alta calidad, utilizando ingredientes selectos y recetas tradicionales.</p>
                            
                                <h3>¿Por qué elegir nuestras baguettes?</h3>
                                <ul>
                                  <li><strong>Frescura garantizada</strong>: Pan recién horneado todos los días.</li>
                                  <li><strong>Calidad superior</strong>: Elaborado con los mejores ingredientes.</li>
                                  <li><strong>Tradición y sabor</strong>: Más de 90 años de experiencia en panadería.</li>
                                </ul>
                            
                                <p>Visítanos hoy y aprovecha esta oferta especial</p>
                                <p>Ubicados en el corazón de Turrialba, te invitamos a disfrutar de nuestras deliciosas baguettes y muchos otros productos artesanales. No te pierdas esta promoción y haz que tus comidas sean aún más especiales con Santo Pan.</p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <img src="/storage/imagenes/PromoBaguette.webp" alt="" class="img-fluid" style="width: 300px; height: 420px;">
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>

      </div>
      
    </section><!-- End Specials Section -->


    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Nueva Zona</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">



          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Zona del Tren</a>
                </li>

            </ul>
          </div>


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3><strong>Nueva Zona en el Tren de Santo Pan</strong></h3>
                        <p>Descubre nuestra <strong>nueva zona</strong> en Santo Pan, ubicada en un <strong>icónico vagón de tren</strong>, donde la historia y la calidez se combinan para ofrecerte una <strong>experiencia única</strong>.</p>
                        <p>Capturado con <strong>tomas aéreas impresionantes</strong>, este video muestra el encanto de nuestro nuevo espacio, ideal para disfrutar <strong>momentos especiales</strong> con amigos y familia.</p>
                        <p>Agradecemos a <strong>Diego Flores Mora</strong> por la increíble toma con dron que nos permite presentar esta experiencia desde una perspectiva única.  
                        ¡<strong>Te esperamos</strong> para que lo vivas en persona!</p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <div class="fb-video" data-href="https://www.facebook.com/reel/558171140517295" data-show-text="false" style="width: 300px; height: 420px;"></div>
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>

      </div>
      
    </section><!-- End Specials Section -->


        <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Una visita muy especial en Santo Pan</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">



          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Visitas especiales</a>
                </li>

            </ul>
          </div>


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3><strong>Invitado especial: Édgar Silva en Santo Pan</strong></h3>
                          <p>
                            En <strong>Santo Pan</strong> tuvimos el honor de recibir a una de las figuras más queridas de la televisión costarricense: 
                            <strong>Édgar Silva</strong>. Con más de <strong>30 años de trayectoria</strong> en medios de comunicación, Édgar se ha ganado el cariño de todo un país gracias a su 
                            <strong>carisma</strong>, <strong>profesionalismo</strong> y cercanía con la gente.
                          </p>
                          <p>
                            Durante su visita, compartió con nosotros su <strong>calidez</strong> y <strong>sencillez</strong>, disfrutando de nuestra 
                            <strong>panadería artesanal</strong> y el sabor auténtico que nos caracteriza. Fue un momento especial que nos recordó por qué hacemos lo que hacemos: 
                            crear espacios donde las <strong>buenas historias</strong> se encuentran con un <strong>buen pan</strong>.
                          </p>
                          <p>
                            <em>¡Gracias, Édgar, por tu visita y por llevar siempre lo mejor de Costa Rica a cada rincón del país!</em>
                          </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <div class="fb-video" data-href="https://www.facebook.com/reel/1073059400330280" data-show-text="false" style="width: 300px; height: 420px;"></div>
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>

      </div>
      
    </section><!-- End Specials Section -->
    
    
    
       </section><!-- End Specials Section -->


        <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <p>Una visita muy especial en Santo Pan</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">



          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">

                <li class="nav-item">
                  <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">deliciosa Paella</a>
                </li>

            </ul>
          </div>


          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">

                  <div class="tab-pane active show" id="tab-1">
                    <div class="row">
                      <div class="col-lg-8 details order-2 order-lg-1">
                        <h3><strong>Un platillo Espectacular</strong></h3>
                              <p>
                                En <strong>Santo Pan</strong> te traemos un nuevo sabor que no te podés perder: nuestras <strong>paellas artesanales</strong>, preparadas con ingredientes frescos, mucho cariño y ese toque único que nos distingue.
                              </p>
                              <p>
                                Disfrutá este <strong>plato español lleno de sabor</strong> en el mejor ambiente de la <strong>zona del tren</strong>. Ideal para compartir con amigos, en familia o simplemente darte un gusto como te lo merecés.
                              </p>
                              <p>
                                <strong>¡Reservá tu mesa hoy mismo!</strong> Llamanos o escribinos al <strong>2556-4343</strong> y asegurá tu espacio para disfrutar una experiencia gastronómica inolvidable.
                              </p>
                              <p>
                                <em>El arroz perfecto, el sazón auténtico… la paella como debe ser, solo en Santo Pan.</em>
                              </p>
                      </div>
                      <div class="col-lg-4 text-center order-1 order-lg-2">
                        <div class="fb-video" data-href="https://www.facebook.com/reel/1442110750138300" data-show-text="false" style="width: 300px; height: 420px;"></div>
                      </div>
                    </div>
                  </div>


            </div>
          </div>
        </div>

      </div>
      
    </section><!-- End Specials Section -->


    <section id="zonas" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Zonas de Santo Pan</h2>
          <p>Estas son las zonas de nuestro local</p>
        </div>

        <div class="events-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            @foreach ($ubicaciones as $item)
                
            <div class="swiper-slide">

              <div class="row event-item">
                <h3>{{$item->nombre}}</h3>

                <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
                  <div class="row g-0">       

                  @foreach ($item->imagenes as $kitem)
                  <div class="col-lg-3 col-md-4">
                    <div class="gallery-item" >
                      <a href="{{$kitem->imagen}}" class="gallery-lightbox" data-gall="gallery-item" >
                        <img src="{{$kitem->imagen}}" alt="" class="img-fluid" style="width: 580px; height: 260px;">
                      </a>
                    </div>
                  </div>
                  @endforeach


                  </div>
          
                </div>


              </div>
            </div><!-- End testimonial item -->

            @endforeach

            </div><!-- End testimonial item -->
              <div class="swiper-pagination"></div>
          </div>
        </div>

      </div>
    </section><!-- End Events Section -->



    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reserva</h2>
          <p>{{$inicio->tituloMesa}}</p>
        </div>

        <form action="{{route('agregarReservacion')}}" method="POST" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="nombre" class="form-control" id="name" placeholder="Nombre Completo" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
{{--             <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="correo_electronico" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div> --}}
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="telefono" id="phone" placeholder="Telefono" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="date" name="fecha" class="form-control" id="date" placeholder="Fecha" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="time" class="form-control" name="hora" id="time" placeholder="Hora" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="num_personas" id="people" placeholder="Numero de personas" data-rule="minlen:1" data-msg="Please enter at least 1 chars" required>
              <div class="validate"></div>
            </div>
            
            <div class="col-lg-4 col-md-6 form-group mt-3">
            <select name="ubicacion" class="form-select p-2" aria-label="Default select example" required>
              <option selected disabled>Seleccione la zona donde le gustaria reservar</option>
              @foreach ($ubicaciones as $item)
                <option value="{{$item->nombre}}">{{$item->nombre}}</option>                 
              @endforeach
            </select>
          </div>

          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="mensaje" rows="5" placeholder="Mensaje"></textarea>
            <div class="validate"></div>
          </div>
{{--           <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
          </div> --}}
          <div class="text-center mt-4"><button type="submit">Reservar Mesa</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galeria</h2>
          <p>{{$inicio->tituloGaleria}}</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          @foreach ($galeria as $item)
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="{{$item->imagen}}" class="gallery-lightbox" data-gall="gallery-item">
                <img src="{{$item->imagen}}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>CONTACTO</h2>
          <p>{{$inicio->tituloContacto}}</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d491.2936649929114!2d-83.68216988263632!3d9.904836395888571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0d7edb4be34b9%3A0xf06c3c5b85e4a1f4!2sSanto%20Pan!5e0!3m2!1ses-419!2scr!4v1702267764298!5m2!1ses-419!2scr" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container mt-5">


            <div class="info">
             <div class="row">

              <div class="col-6" style="margin-top: 36px ">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Localización:</h4>
                  <p>{{$inicio->localizacion}}</p>
                </div>
              </div>

              <div class="col-6">
              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Horario</h4>
                <p>
                  {{$inicio->horario}}
                </p>
              </div>
            </div>

            <div class="col-6">
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>{{$inicio->correo_electronico}}</p>
              </div>
            </div>

            <div class="col-6">
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telefono:</h4>
                <p>{{$inicio->telefono}}</p>
              </div>
            </div>


            </div>
        </div>

        <center>
          <div class="iconos-sociales mt-4">
          
          <a href="https://www.facebook.com/bySantoPan" target="_blank"><img loading="lazy" alt="Sígueme en Facebook" height="35" width="35" src=" https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEh6vlV5enwWRJSXPWHkLi_QEhcy0OAwMgVAqp4F0dvu5sJ5zMBOSAPoqw4ZrMk6GaS_YUtjrK6p_qrHJipWOJz_Ib3NIppNWwx8se0fmswGW1YhYOT4lzTZXssDtPNuzZ7KxvJGR3RDarUt/s0/facebook-icono.png" title="Síguenos en Facebook"/></a>
          
          <a href="https://www.instagram.com/santopan_turrialba/" target="_blank"><img loading="lazy" alt="Sígueme en Instagram" height="35" width="35" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEioycSf-8NI3Ff15eeXtdXUO4e888671ildrsPBjKJnTFjzSymZi95xweZpk0Vc6zll0WDyE0pBGj3PWL564QS8VkRxeh_PbW6y6sT9dWJq-xHh1ohUJN737-Qe-c12TRC2kUAbf7TBzxK5/s0/Instagram-icono.png" title="Síguenos en Instagram"/></a>       
             
          </div>
          </center>
          
           <!-- Aquí van los estilos -->
          


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Santo Pan</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
      
        <a href={{route('home')}} target="_blank">Administracion</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v19.0" nonce="xyz"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
        function envioSolicitud() {
        Swal.fire(
        '¡Solicitud Enviada!',
        'Sera notificado una vez haya sido revisada su solicitud',
        'success'
    )
    }
  </script>

</body>

</html>