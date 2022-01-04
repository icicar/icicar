<section class="search white-bg">


    {{-- {{dd(($marcas['marcas'][0]['marca']))}} --}}
    {{-- {{Log::info('marca seleccionada: ' . $selectedMarca)}}--}}
    {{-- {{Log::info('modelo seleccionado: ' . $selectedModelo)}}--}}
    <div class="container">
        <div class="search-block">
            <div class="row">
                <div class="col-md-12">
                    <form wire:submit.prevent="getResultados" method="GET">
                    <div class="row">
                        <div class="col-md-4">
                            <span>Marca</span>
                            <div class="selected-box">
                                <select name="idmarca" class="selectpicker" wire:change="selectedMarca($event.target.value)">
                                    <option value="">Marca </option>
                                    @foreach ($marcas[1]->marcas as $marca )
                                        <option value="{{$marca->idmarca}}">{{$marca->marca}} </option>
                                    @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="col-md-4">
                            <span>Modelo</span>
                            <div class="selected-box">
                                <select name="idmodelo" class="selectpicker" wire:change="selectedModelo($event.target.value)">
                                    <option value="">Modelos </option>
                                    @if(!is_null($selectedMarca))
                                        @foreach($modelos[1]->modelos as $modelo)
                                            <option value="{{$modelo->idmodelo}}" selected> {{$modelo->modelo}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>


                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="price-slide">
                                        <div class="price">
                                            <label for="amount">Rango de precio</label>
                                            <input type="text" name="amount" id="amount" class="amount" value="{{number_format(round($rangoPrecios['1']->preciomin),0,'','.')}} € - {{number_format(round($rangoPrecios['1']->preciomax),0,'','.')}} €" wire:change="selectedAmount($event.target.value)" />
                                            <div id="slider-range"></div>
                                            <input type="hidden" name="precioMin"  id="precioMin" wire:model="selectedPrecioMin">
                                            <input type="hidden" name="precioMax"  id="precioMax" wire:model="selectedPrecioMax">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <button type="submit" class="button  col-md-12 col-xs-12">Buscar</button>
                                </div>
                            </div>
                        </div>
                </div>
            </form>
            </div>
        </div>

    </div>
</section>


@section('scripts')

@stop
