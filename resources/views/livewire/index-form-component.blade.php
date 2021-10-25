<section class="search white-bg">

    {{-- {{dd(($marcas['marcas'][0]['marca']))}} --}}
    {{ Log::info('Marcas blade: ' . json_encode($marcas)) }}
    {{ Log::info('Modelos Blade: ' . json_encode($modelos)) }}
    {{Log::info('marca seleccionada: ' . $selectedMarca)}}
    <div class="container">
        <div class="search-block">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <span>Marca</span>
                            <div class="selected-box">
                                <select class="selectpicker" wire:change="selectedMarca($event.target.value)">
                                {{-- <select wire:model="selectedMarca" name="selectedMarca" class="selectpicker"> --}}
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
                                <select class="selectpicker">
                                    <option value="">Modelos </option>
                                    @if(!is_null($selectedMarca))
                                        @foreach($modelos[1]->modelos as $modelo)
                                            <option value="{{$modelo->idmodelo}}" selected> {{$modelo->modelo}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-md-4">
                            <span>Kilómetros</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Kilómetros</option>
                                    <option>10.000</option>
                                    <option>25.000</option>
                                    <option>40.000</option>
                                    <option>65.000</option>
                                    <option>90.000</option>
                                    <option>+100.000</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="price-slide">
                                        <div class="price">
                                            <label for="amount">Rango de precio</label>
                                            <input type="text" id="amount" class="amount" value="5.000€ - 90.000€" />
                                            <div id="slider-range"></div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a class="button  col-md-12 col-xs-12" href="#">Buscar</a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>


@section('scripts')

@stop

