<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Icicar Automoción</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}"/>
        {{-- <link href="{{ asset('assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ asset('assets/js/loader.js') }}"></script> --}}

        <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">

        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />

        <!-- flaticon -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}" />

        <!-- mega menu -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mega-menu/mega_menu.css') }}" />

        <!-- mega menu -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}" />

        <!-- owl-carousel -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl-carousel/owl.carousel.css') }}" />

        <!-- jquery-ui -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}" />

        <!-- revolution -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">

        <!-- main style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />

        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />


        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Sección para incluír estilos personalizados en los módulos del sistema  -->
        @yield('styles')

        <!-- Necesario para el funcionamiento de Livewire -->

        @livewireStyles
    </head>
    <body class="antialiased">

        {{-- <div id="load_screen">
            <div class="loader">
                <div class="loader-content">
                    <div class="spinner-grow align-self-center"></div>
                </div>
            </div>
        </div> --}}
        <header id="header" class="topbar-dark">
            <div class="topbar">
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="topbar-left text-lg-left text-center">
                       <ul class="list-inline">
                         <li> <a href="mailto:info@icicarauto.com"><i class="far fa-envelope"> </i> info@icicarauto.com</a></li>
                         <li> <a href="tel:0034914287466"><i class="fas fa-phone-alt"></i> 914 287 466</a></li>
                       </ul>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="topbar-right text-lg-right text-center">
                       <ul class="list-inline">
                         <li><a href="https://wa.me/34618922961"><i class="fab fa-whatsapp"></i> 618 922 961</a></li>
                         <li><a href="https://www.facebook.com/Icicar-Automoción-111811394281337/"><i class="fab fa-facebook-f"></i></a></li>
                         <li><a href="https://www.linkedin.com/in/icicar-automoción-a784b0210/?originalSubdomain=es"><i class="fab fa-linkedin-in"></i></a></li>
                         <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                       </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--=================================
             mega menu -->

            <div class="menu">
              <!-- menu start -->
               <nav id="menu" class="mega-menu">
                <!-- menu list items container -->
                <section class="menu-list-items">
                 <div class="container">
                  <div class="row">
                   <div class="col-md-12">
                    <!-- menu logo -->
                    <ul class="menu-logo">
                        <li>
                            <a href="{!! url('/')!!}"><img id="logo_dark_img" src="{{ asset('assets/img/logo-header.png') }}" alt="logo"> </a>
                        </li>
                    </ul>
                    <!-- menu links -->
                    <ul class="menu-links ">
                        <!-- active class -->
                        <li class="active"><a href="{!! url('/')!!}">Inicio</a></li>
                        <li><a href="{!! url('listado-vehiculos') !!}">Vehículos</a></li>
                        <li><a href="{!! url('quienes-somos')!!}">Quiénes somos</a></li>
                        <li><a href="{!! url('contacto')!!}" data-hover="Contacto">Contacto</a></li>
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                        @else
                            <li><a href="{{ route('login') }}" class="underline">Log in</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}" class="underline">Register</a></li>
                            @endif
                        @endauth
                    </ul>
                   </div>
                  </div>
                 </div>
                </section>
               </nav>
              <!-- menu end -->
             </div>
            </header>
           @yield('content')

        <footer class="footer-3 footer-topbar light page-section-pt">
            <div class="container">
            <div class="row top">
              {{-- <div class="col-lg-3 col-md-12">
                <img class="img-fluid" id="logo_footer_dark" src="images/logo-dark.png" alt="">
              </div> --}}
              <div class="col-lg-5 col-md-12">
                <div class="footer-nav text-lg-right text-center">

                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="social text-lg-right text-center">
                    <ul>
                        <li><a href="https://wa.me/34618922961"><i class="fab fa-whatsapp"></i> </a></li>
                        <li><a href="https://www.facebook.com/Icicar-Automoción-111811394281337/"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/icicar-automoción-a784b0210/?originalSubdomain=es"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                 </div>
              </div>
             </div>
              <div class="row">
                <div class="col-md-12">
                  <hr />
                </div>
              </div>
              <div class="row">
                <div class="col-lg-5 col-md-12">
                  <div class="about-content">
                   <h6 class="text-black">Sobre nosotros</h6>
                    <p class="text-gray">En Icicar Automoción sabemos que es el momento de renovar tu coche.
                        Disponemos de una gran selección de vehículos nuevos, semi nuevos y de segunda mano en nuestras instalaciones de Torrejón de Ardoz.
                    </p>
                  </div>
                </div>
                <div class="col-lg-7 col-md-12">
                <h6 class="text-black">Enlaces de interés</h6>
                    <div class="usefull-link">
                      <div class="row">
                        <div class="col-md-4">
                            <ul>
                                <li> <a href="vehiculos"> <i class="fas fa-angle-right"></i> Vehículos </a></li>
                                <li> <a href="quienes-somos"> <i class="fas fa-angle-right"></i> Quiénes somos</a></li>
                                <li> <a href="contacto"> <i class="fas fa-angle-right"></i> Contacto</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">

                        </div>

                      </div>
                  </div>
                </div>
              </div>
              </div>
              <div class="copyright">
               <div class="container">
                <div class="row">
                 <div class="col-lg-6 col-md-12">
                   <div class="text-lg-left text-center">
                   <p>© Copyright {{ date('Y') }} Icicar Automoción, S.L.</p>
                 </div>
                </div>
                <div class="col-lg-6 col-md-12">
                  <ul class="list-inline text-lg-right text-center">
                    <li><a href="politica-privacidad">Política de privacidad </a> | </li>
                    <li><a href="aviso-legal">Aviso legal </a> |</li>
                    <li><a href="politica-cookies">Política de cookies </a></li>
                  </ul>
                </div>
               </div>
              </div>
             </div>
          </footer>


          <script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>



            <!-- bootstrap -->
            <script type="text/javascript" src="{{ asset('assets/js/popper.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

            <!-- mega-menu -->
            <script type="text/javascript" src="{{ asset('assets/js/mega-menu/mega_menu.js') }}"></script>

            <!-- appear -->
            <script type="text/javascript" src="{{ asset('assets/js/jquery.appear.js') }}"></script>

            <!-- counter -->
            <script type="text/javascript" src="{{ asset('assets/js/counter/jquery.countTo.js') }}"></script>

            <!-- owl-carousel -->
            <script type="text/javascript" src="{{ asset('assets/js/owl-carousel/owl.carousel.min.js') }}"></script>

            <!-- jquery-ui -->
            <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.js') }}"></script>

            <!-- select -->
            {{-- <script type="text/javascript" src="{{ asset('assets/js/select/jquery-select.js') }}"></script> --}}

            <!-- magnific popup -->
            <script type="text/javascript" src="{{ asset('assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

            <!-- revolution -->
            <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
            <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

            <!-- custom -->
            <script type="text/javascript" src="{{ asset('assets/js/custom.js') }}"></script>

            <script type="text/javascript">
            (function($){
            "use strict";

                var tpj=jQuery;
                var revapi3;
                tpj(document).ready(function() {
                    if(tpj("#rev_slider_3_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_3_1");
                    }else{
                    revapi3 = tpj("#rev_slider_3_1").show().revolution({
                        sliderType:"standard",
                        sliderLayout:"fullwidth",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                                        mouseScrollReverse:"default",
                        onHoverStop:"off",
                        arrows: {
                            style:"zeus",
                            enable:true,
                            hide_onmobile:false,
                            hide_onleave:false,
                            tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                            left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                                                v_offset:0
                            },
                            right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                                                v_offset:0
                            }
                        }
                        },
                        visibilityLevels:[1240,1024,778,480],
                        gridwidth:1270,
                        gridheight:700,
                        lazyType:"none",
                        shadow:0,
                        spinner:"spinner3",
                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,
                        shuffle:"off",
                        autoHeight:"off",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                        }
                    });
                    }
                });
            })(jQuery);

            </script>


            @livewireScripts
    </body>
</html>
