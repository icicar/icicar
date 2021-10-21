<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\constants\MyConstants;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;

class IndexFormComponent extends Component
{
    // public $marcas;
    public $selectedMarca = null, $selectedModelo = null;
    public $modelos = null;


    public function render()
    {
        // return view('livewire.index-form-component');
        $marcas = Http::get(MyConstants::URL_CONNECTION.MyConstants::URI_MARCAS)->json();
        return view('livewire.index-form-component',[
            'marcas' => $marcas
        ]);
    }

    public function updatedselectedMarca($idmarca)
    {
        $arrayModelos = [];
        $getModelos = Http::get(MyConstants::URL_CONNECTION.MyConstants::URI_MODELOS)->json();
        foreach($getModelos['modelos'] as $modelo){
            if($modelo['idmarca']== $idmarca){
                $arrayModelos = Arr::add($arrayModelos, 'idmodelo' , $modelo['idmodelo']);
                $this->modelos = $arrayModelos;
            }
        }
    }



}


