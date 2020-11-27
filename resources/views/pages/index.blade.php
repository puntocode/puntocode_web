<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Puntocode Paraguay</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="400">
    <div id="app">

        <div class="loader-container">
            <div class="loader"></div>
        </div>

        <header id="home">
            <x-navbar></x-navbar>
            <div class="bg-index">
                <img class="bg-circle" src="{{ asset('/img/index/circle1.svg') }}" alt="">
                <img class="bg-circle d-none d-lg-block" src="{{ asset('/img/index/circle2.svg') }}" alt="">
                <div class="container">
                    <div class="hero">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <h1 class="wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">Desarrollo web y aplicaciones móviles en Paraguay</h1>
                                <p class=" wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">La tecnología se esta moviendo más rápido que nunca, actualízate antes que tu competencia lo haga.</p>
                                <a href="#" class="btn btn-grad btn-lg text-uppercase d-block wow animate__fadeInUp" data-wow-duration="1s" data-wow-delay="0.8s">QUIERO MI SITIO WEB</a>
                            </div>
                            <div class="col-lg-7 wow animate__fadeInRightBig" data-wow-duration="1s" data-wow-delay="1.1s">
                                <img src="{{ asset('/img/index/ordenadores.png') }}" class="img-orde img-fluid" alt="Ordenadores">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="hacemos" id="servicios">
            <div class="container pb-5">
                <h2 class="text-center pt-5 pb-3 wow animate__fadeIn" data-wow-duration="1s">QUE HACEMOS</h2>
                <div class="row pt-3">
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end pt-0">
                            <img src="{{ asset('/img/icons/icon-web.svg') }}" alt="">
                            <h4>Sistema Web</h4>
                        </div>
                        <p>Análisis y desarrollo a medida de software para todo tipo de empresas o particulares.</p>
                    </div>
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end">
                            <img src="{{ asset('/img/icons/icon-app.svg') }}" alt="">
                            <h4>Aplicaciones Moviles</h4>
                        </div>
                        <p>Análisis, estudio y desarrollo utilizando conexión en tiempo real y diseño único e interactivo.</p>
                    </div>
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end">
                            <img src="{{ asset('/img/icons/icon-branding.svg') }}" alt="">
                            <h4>Branding</h4>
                        </div>
                        <p>Nos encargaremos de darle a tu empresa identidad única de manera a ser fácilmente reconocible en el mercado.</p>
                    </div>
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end">
                            <img src="{{ asset('/img/icons/icon-pag.svg') }}" alt="">
                            <h4>Landing page</h4>
                        </div>
                        <p>Diseño de páginas web con estilo único y exclusivo utilizando lo último en estructura de sitios.</p>
                    </div>
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end">
                            <img src="{{ asset('/img/icons/icon-seo.svg') }}" alt="">
                            <h4>Posicionamietno Google</h4>
                        </div>
                        <p>Hágase conocer en google y permita que sus potenciales clientes lo encuentren fácilmente.</p>
                    </div>
                    <div class="col-md-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="titulo d-flex align-items-end">
                            <img src="{{ asset('/img/icons/icon-asesoria-server.svg') }}" alt="">
                            <h4>Asesoría Informática</h4>
                        </div>
                        <p>Te guiaremos paso a paso de manera a que tomes las decisiones correctas en el mundo de la informática.</p>
                    </div>
                </div>

            </div>
        </section>

        <section class="nosotros" id="nosotros">
            <div class="container py-5">
                <div class="row ">
                    <div class="col-md-5 wow animate__fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{ asset('/img/index/nosotros.png') }}" class="img-fluid" alt="Imagen sobre nosotros">
                    </div>

                    <div class="col-md-7 wow animate__fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.7s">
                        <h3 class="text-uppercase text-secondary pt-3 wow animate__bounce">nosotros</h3>
                        <p>Somos una empresa 100% Paraguaya, innovadora y altamente capacitada en diseño y desarrollo de sitios web y aplicaciones móviles, con muchas ganas de que tus proyectos se hagan realidad.</p>

                        <div class="contador d-flex">

                            <div class="card-contador">
                                <img src="{{ asset('/img/index/customer.svg') }}" alt="">
                                <div class="customer">
                                    <h5 class="font-weight-bold text-count d-none"><span class="counter">50</span>+</h5>
                                    <p>Clientes</p>
                                </div>
                            </div>

                            <div class="card-contador">
                                <img src="{{ asset('/img/index/project.svg') }}" alt="">
                                <div class="customer">
                                    <h5 class="font-weight-bold text-count d-none"><span class="counter">200</span>+</h5>
                                    <p>Proyectos</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="elegir">
            <div class="container py-5">
                <h2 class="my-3 text-center text-gray wow animate__fadeInUp" data-wow-duration="1s">Por qué elegir a PUNTOCODE?</h2>

                <div class="row pt-4 wow animate__fadeIn" data-wow-duration="1s">
                    <div class="col-sm-6 col-md-6 col-lg-3 pb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('/img/icons/icon-responsive.svg') }}" alt="" width="100px">
                                <h5 class="card-title">Web Responsive</h5>
                                <p class="card-text">Web y aplicaciones responsivas, adaptables a cualquier dispositivo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 pb-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('/img/icons/icon-ux.svg') }}" alt="" width="100px">
                                <h5 class="card-title">Experiencia de Usuario</h5>
                                <p class="card-text">Nuestras web y aplicaciones estan diseñadas para la mejor experiencia de los usuarios (UX/UI).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 pb-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('/img/icons/icon-velocity.svg') }}" alt="" width="100px">
                                <h5 class="card-title">Alta Velocidad</h5>
                                <p class="card-text">Realizamos trabajos con codigo limpio, lo cual da alta velocidad a todas nuestras aplicaciones y sitio web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3 pb-4 wow animate__fadeIn" data-wow-duration="1s">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body text-center">
                                <img src="{{ asset('/img/icons/icon-garanty.svg') }}" alt="" width="100px">
                                <h5 class="card-title">Garantía y Soporte</h5>
                                <p class="card-text">Todos nuestros trabajos cuentan con Garantía y Soporte Técnico cuando lo requiera.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section id="portfolio">
            <div class="container py-5">

                <div class="row align-items-end">
                    <div class="col-lg-4 col-md-3  wow animate__fadeInUp" data-wow-duration="1s">
                        <h2 class="text-uppercase">proyectos</h2>
                        <p>Nuestro <span class="font-bold">Portfolio</span></p>
                    </div>
                    <div class="col-lg-8 col-md-9 text-left text-md-right  wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="portfolio-menu">
                            <ul>
                                <li class="active" data-filter="*">Ver Todos</li>
                                <li data-filter=".web">Web</li>
                                <li data-filter=".apps">Apps</li>
                                <li data-filter=".branding">Branding</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="portfolio-item">
                    <div class="row">
                        <div class="col-lg-4 item web">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-1.jpg') }}" alt="Portfolio de biolimpieza">
                            </div>
                        </div>
                        <div class="col-lg-4 item branding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-2.jpg') }}" alt="Portfolio de Roman">
                            </div>
                        </div>
                        <div class="col-lg-4 item apps">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-3.jpg') }}" alt="Portfolio de Ruth">
                            </div>
                        </div>
                        <div class="col-lg-4 item branding">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-4.jpg') }}" alt="Portfolio de Osval">
                            </div>
                        </div>
                        <div class="col-lg-4 item web">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-5.jpg') }}" alt="Portfolio de Zandona">
                            </div>
                        </div>
                        <div class="col-lg-4 item apps">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-6.jpg') }}" alt="Portfolio de Puntocode">
                            </div>
                        </div>
                        <div class="col-lg-4 item apps">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-7.jpg') }}" alt="Portfolio de Fisiostetik">
                            </div>
                        </div>
                        <div class="col-lg-4 item branding">

                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-8.jpg') }}" alt="Portfolio de CristalPar">
                            </div>
                        </div>
                        <div class="col-lg-4 item web">
                            <div class="card">
                                <img class="card-img-top" src="{{ asset('/img/index/portfolio-9.jpg') }}" alt="Portfolio de El Antiguo">
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="consultas" id="contacto">
        <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 wow animate__fadeInUp" data-wow-duration="1s">
                        <h2 class="m-0">Consultas?</h2>
                        <p>estamos para ayudarte</p>
                    </div>
                    <div class="col-6 col-md-4 pt-3 p-md-0 wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <a href="https://wa.link/b13x2v"><img src="{{ asset('/img/icons/icon-whatsapp.svg') }}" alt="">0971643957</a>
                    </div>
                    <div class="col-6 col-md-4 pt-3 p-md-0 wow animate__fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <a href="mailto:puntocodepy@gmail.com"><img src="{{ asset('/img/icons/icon-email.svg') }}" alt="">Enviar un email</a>
                    </div>
                </div>
            </div>
        </section>

        <x-footer></x-footer>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
