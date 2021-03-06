<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="listing-sidebar">
                    <div class="widget">
                        <div class="widget-search">
                            <h5>Busqueda Avanzada</h5>
                            <ul class="list-style-none">
                                <li>
                                    {{ dd($vehiculosEncontrados )}}
                                    <i class="fas fa-star"> </i> Vehículos encontrados <span
                                        class="float-right">{{ $vehiculosEncontrados->totalelements }}</span>
                                </li>
                                {{-- <li>
                                    <i class="fas fa-shopping-cart"> </i> Compare Vehicles
                                    <span class="float-right">(10)</span>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- Años --}}
                        <div class="clearfix">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <a href="#">Precio</a>
                                    <ul>
                                        <li>
                                            <div class="price-slide">
                                                <div class="price">
                                                    <input type="text" name="amount" id="amount" class="amount"
                                                        value="{{-- {{number_format(round($rangoPrecios['1']->preciomin),0,'','.')}} € - {{number_format(round($rangoPrecios['1']->preciomax),0,'','.')}} € --}}7500-38500" />
                                                    <div id="slider-range"></div>
                                                    {{-- <input type="hidden" name="precioMin"  id="precioMin" value="{{$rangoPrecios['1']->preciomin}}" wire:change="selectedPrecioMin($event.target.value)">
                                                    <input type="hidden" name="precioMax"  id="precioMax" value="{{$rangoPrecios['1']->preciomax}}" wire:change="selectedPrecioMax($event.target.value)"> --}}
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Year</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> All Years
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2009
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2010
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2011
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2012
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2013
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2014
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2015
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2016
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Condition</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> All Conditions
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Brand New
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Slightly Used
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Used
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Body</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> All Body Styles
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 2dr Car
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 4dr Car
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Convertible
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Sedan
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Sports Utility Vehicle
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Model</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> All Models
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 3-Series
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Boxster
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Carrera
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Cayenne
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> F-type
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> GT-R
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> GTS
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> M6
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Macan
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Mazda6
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> RLX
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Transmission</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> All Transmissions
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 5-Speed Manual
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 6-Speed Automatic
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 6-Speed Manual
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 6-Speed Semi-Auto
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 7-Speed PDK
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 8-Speed Automatic
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> 8-Speed Tiptronic
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Exterior Color</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Ruby Red Metallic
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Racing Yellow
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Guards Red
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Aqua Blue Metallic
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> White
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Dark Blue Metallic
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Interior Color</a>
                                    <ul>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Platinum Grey
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Agate Grey
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Marsala Red
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Alcantara Black
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Black
                                                </label>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Luxor Beige
                                                </label>
                                            </span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        {{-- Fin Años --}}
                    </div>
                    <div class="widget-banner">
                        <img class="img-fluid center-block" src="images/banner.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <div class="sorting-options-main">
                    <div class="row">

                        <div class="col-lg-4 ">
                            <div class="price-search">
                                <span>Price search</span>
                                <div class="search">
                                    <i class="far fa-search"></i>
                                    <input type="search" class="form-control placeholder" placeholder="Buscar....">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 text-right offset-4">
                            <div class="price-search selected-box">
                                <span>&nbsp;</span>
                                <select>
                                    <option>Ordenadar por </option>
                                    <option>Price: Lowest first</option>
                                    <option>Price: Highest first </option>
                                    <option>Product Name: A to Z </option>
                                    <option>Product Name: Z to A </option>
                                    <option>In stock</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="row sorting-options">



                    </div>
                </div>
                <div class="car-grid">

                    <div class="row  row-eq-height">
                        @foreach($vehiculos[1]->vehiculos as $vehiculo)
                        {{ dd($vehiculos[1]) }}
                        <div class="col-lg-4 mb-4">
                            <div class="car-item gray-bg text-center">
                                <div class="car-image">
                                    @if (isset($vehiculo->fotos))
                                        <img class="img-fluid" src="{{ $foto->foto }}" alt="">
                                    @else
                                        <img class="img-fluid" src="{{ asset('assets/img/nofoto.jpg') }}" alt="">
                                    @endif
                                </div>
                                <div class="car-content">
                                    <div class="star">
                                        {{ number_format($vehiculo->kms, 0, '', '.') }} km. |
                                        {{ $vehiculo->carburante }} |
                                        {{ substr($vehiculo->fechamatricula, -4) }} |
                                        {{ $vehiculo->tipocambio }}
                                    </div>
                                    <a href="#">
                                        <span class="text-center"> {{ $vehiculo->marca }} </span>
                                        <br>
                                        <span class="car-item-modelo-version">  {{ ucfirst($vehiculo->modelo) }} {{ ucfirst(strtolower($vehiculo->version)) }} </span>
                                    </a>
                                    <div class="separator"></div>
                                    <div class="price">
                                        @if (Auth::user())
                                            <span class="old-price">{{ round($vehiculo->precio) }} € </span>
                                        @else
                                            {{-- number_format(123456789, 0, '', '.') --}}
                                            <span
                                                class="new-price">{{ number_format(round($vehiculo->precio), 0, '', '.') }}
                                                € </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                           </div>
                        @endforeach
                    </div>


                </div>
                {{-- @foreach ($vehiculos[1]->vehiculos as $vehiculo)
                    <div class="car-grid">
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <div class="car-item gray-bg text-center">
                                    <div class="car-image">
                                        @if (isset($vehiculo->fotos))
                                            <div id="carouselExampleControls" class="carousel slide"
                                                data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($vehiculo->fotos as $foto)
                                                        @if ($foto->portada == 1)
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="{{ $foto->foto }}"
                                                                    alt="First slide">
                                                            </div>
                                                        @else
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="{{ $foto->foto }}"
                                                                    alt="First slide">
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleControls"
                                                    role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleControls"
                                                    role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-md-12">
                                <div class="car-details">
                                    <div class="car-title">
                                        <a href="#">{{ $vehiculo->marca }} - {{ $vehiculo->modelo }}
                                            {{ $vehiculo->version }}</a>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero numquam
                                        repellendus non voluptate. Harum blanditiis ullam deleniti.</p>
                                    </div>
                                    <div class="price">
                                        @if (Auth::user())
                                            <span class="old-price">{{ round($vehiculo->precio) }} € </span>
                                        @else
                                            <span
                                                class="new-price">{{ number_format(round($vehiculo->precio), 0, '', '.') }}
                                                € </span>
                                        @endif
                                        <button class="button red float-right"
                                            wire:click="getDetalleVehiculo({{ $vehiculo->idvehiculoopera }})">Ver
                                            vehiculo</button>
                                    </div>
                                    <div class="car-list">
                                        <ul class="list-inline">
                                            <li> {{ $vehiculo->carburante }} </li>
                                            <li> Manual </li>
                                            <li> {{ number_format($vehiculo->kms, 0, '', '.') }} km.</li>
                                            <li> {{ substr($vehiculo->fechamatricula, -4) }} </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach --}}




                <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
