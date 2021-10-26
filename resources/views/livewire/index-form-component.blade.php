<section class="search white-bg">

    {{-- {{dd(($marcas['marcas'][0]['marca']))}} --}}
    {{Log::info('marca seleccionada: ' . $selectedMarca)}}
    {{Log::info('modelo seleccionado: ' . $selectedModelo)}}

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
                                            <input type="text" name="amount" id="amount" class="amount" value="5.000€ - 90.000€" />
                                            <div id="slider-range"></div>

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

