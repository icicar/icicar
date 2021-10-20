<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Controllers\VehiculosController;
use App\Helpers\ApiConnectionHelper;
use App\constants\MyConstants;
use Illuminate\Support\Facades\Http;

class IndexFormComponent extends Component
{
    // public $marcas;

    // public function mount($marcas)
    // {
    //     $marcas = Http::get(MyConstants::HTTPS.MyConstants::API_USER.':'.MyConstants::API_PWD.'@'.MyConstants::API_URL.MyConstants::URI_MARCAS)->json();
    //     dd($marcas);
    //     $this->marca = $marcas['marcas'];
    //     dd($this->marcas);

    // }

    public function render()
    {
        // return view('livewire.index-form-component');
        return view('livewire.index-form-component',[
            'marcas' => (Http::get(MyConstants::URL_CONNECTION.MyConstants::URI_MARCAS)->json())
        ]);
    }

}


