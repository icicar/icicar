@extends('layouts.template')

@section('content')
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

                                    <i class="fas fa-star"> </i> Vehículos encontrados <span
                                        class="float-right">{{ $vehiculosEncontrados }}</span>
                                </li>
                                {{-- <li>
                                    <i class="fas fa-shopping-cart"> </i> Compare Vehicles
                                    <span class="float-right">(10)</span>
                                </li> --}}
                            </ul>
                        </div>
                        {{-- Formulario --}}
                        <form name="frm_busqueda_filtros" method="POST" action="{{ route('listado_vehiculos') }}">
                        @csrf
                        <input type="hidden" name="pag" value="1" />
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
                                    <a href="#">Fecha Matriculación</a>
                                    <ul>
                                        <li>
                                            @if($añosMatriculacion)
                                            <select name="fechaMatriculacion" id="fechaMatriculacion" onchange="submit();">
                                                    <option value="null" {{ ($fechaMatriculacion==null)? 'selected'  : '' }}>Todos los años</option>
                                                @foreach($añosMatriculacion as $año)
                                                    <option value="{{ $año }}" {{ ($fechaMatriculacion==$año)? 'selected'  : '' }}>{{ $año }}</option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Marca</a>
                                    <ul>
                                        <li>
                                            <script>
                                                function cambiar_marca(){
                                                    document.forms['frm_busqueda_filtros'].idmodelo.value=null;
                                                    document.forms['frm_busqueda_filtros'].submit();
                                                }
                                            </script>
                                            @if($marcas)
                                            <select name="idmarca" id="idmarca" onchange="javascript:cambiar_marca();">
                                                    <option value="null" {{ ($selectedMarca==null)? 'selected'  : '' }}>Todas las marcas</option>
                                                @foreach($marcas as $marca)
                                                    <option value="{{ $marca->idmarca }}" {{ ($selectedMarca==$marca->idmarca)? 'selected'  : '' }}>{{ $marca->marca }}</option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Modelo</a>
                                    <ul>
                                        @if($modelos)
                                        <select name="idmodelo" id="idmodelo" onchange="submit();">
                                                <option value="null" {{ ($selectedModelo==null)? 'selected'  : '' }}>Todos los modelos</option>
                                            @foreach($modelos as $modelo)
                                                <option value="{{ $modelo->idmodelo }}" {{ ($selectedModelo==$modelo->idmodelo)? 'selected'  : '' }}>{{ $modelo->modelo }}</option>
                                            @endforeach
                                        </select>
                                        @endif
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Kilometros</a>
                                    <ul>
                                            <li>
                                                <input type="text" class="form-control placeholder" name="kilometros" value="{{ ($kilometros) ? $kilometros : '' }}" onchange="submit();" />
                                            </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Combustible</a>
                                    <ul>
                                        <li>
                                            @if($carburantes)
                                            <select name="idcarburante" id="idcarburante" onchange="submit();">
                                                    <option value="null" {{ ($selectedCarburante==null)? 'selected'  : '' }}>Todos los años</option>
                                                @foreach($carburantes as $carburante)
                                                    <option value="{{ $carburante->idcarburante }}" {{ ($selectedCarburante==$carburante->idcarburante)? 'selected'  : '' }}>{{ $carburante->carburante }}</option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Cambio</a>
                                    <ul>
                                        <li>

                                            @if($tiposCambio)
                                            <select name="idtipocambio" id="idtipocambio" onchange="submit();">
                                                    <option value="null" {{ ($selectedTipoCambio==null)? 'selected'  : '' }}>Tipos de Cambio</option>
                                                @foreach($tiposCambio as $tipoCambio)
                                                    <option value="{{ $tipoCambio->idtipocambio }}" {{ ($selectedTipoCambio==$tipoCambio->idtipocambio)? 'selected'  : '' }}>{{ $tipoCambio->tipocambio }}</option>
                                                @endforeach
                                            </select>
                                            @endif
                                        </li>
                                    </ul>
                                </li>
                                <li class="list-group-item">
                                    <a href="#">Etiqueta</a>
                                    <ul>
                                            <li>
                                                <select name="etiqueta" id="etiqueta" onchange="submit();">
                                                    <option value="null" {{ ($selectedEtiqueta==null)? 'selected'  : '' }}>Todas las Etiquetas</option>
                                                    <option value="B" {{ ($selectedEtiqueta=='B')? 'selected'  : '' }}>B</option>
                                                    <option value="C" {{ ($selectedEtiqueta=='C')? 'selected'  : '' }}>C</option>
                                                    <option value="ECO" {{ ($selectedEtiqueta=='ECO')? 'selected'  : '' }}>ECO</option>
                                                    <option value="CERO" {{ ($selectedEtiqueta=='CERO')? 'selected'  : '' }}>CERO</option>
                                                </select>
                                            </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        </form>
                        {{-- Fin Formulario --}}
                    </div>
                    <div class="widget-banner">
                        <img class="img-fluid center-block" src="images/banner.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-8">
                <!---
                <div class="sorting-options-main">
                    <div class="row">

                        <div class="col-lg-4 ">
                            <div class="price-search">
                                <span>BUSQUEDA</span>
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
                --->
                <div class="car-grid">

                    <div class="row  row-eq-height">
                        @if(($vehiculos[1]&&$vehiculos[1]!=null))
                        @foreach($vehiculos[1]->vehiculos as $vehiculo)

                        <div class="col-lg-4 mb-4">
                            <div class="car-item gray-bg text-center">
                                <div class="car-image">
                                    @if (isset($vehiculo->fotos))
                                        <img class="img-fluid" src="{{ $vehiculo->fotos[0]->foto }}" alt="">
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
                                    <a href="{{ route('detalle_vehiculo',$vehiculo->idvehiculoopera) }}">
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
                        @endif
                    </div>


                </div>

                <script>
                    function irPagina($pag){
                        document.forms['frm_busqueda_filtros'].pag.value=$pag;
                        document.forms['frm_busqueda_filtros'].submit();
                    }
                </script>
                <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        @if($paginaAnterior>0)
                        <li><a href="javascript:irPagina({{ $paginaAnterior }})">«</a></li>
                        @endif
                        @for($pag=1;$pag<=$numPaginas;$pag++)
                        <li class="{{ ($pag==$pagina)? 'active' : '' }}"><a href="javascript:irPagina({{ $pag }})">{{ $pag }}</a></li>
                        @endfor
                        @if($paginaSiguiente<=$numPaginas)
                        <li><a href="javascript:irPagina({{ $paginaSiguiente }})">»</a></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
