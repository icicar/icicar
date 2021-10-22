<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Support\Facades\Log;

class IndexFormComponent extends Component
{
    // public $marcas;
    public $marcas;
    public $modelos;

    public $selectedMarca = NULL;



    public function mount()
    {
        $this->marcas = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MARCAS, null);;
        // $this->marcas = Http::get(MyConstants::URL_CONNECTION.MyConstants::URI_MARCAS)->json();
        $this->modelos;
    }

    public function render()
    {
        return view('livewire.index-form-component');
    }

    public function selectedMarca($idmarca)
    {
        Log::info('id marca' . $idmarca);
        if(!is_null($idmarca)){
            $arrayModelos = [];
            $getModelos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MODELOS, null);
            foreach($getModelos[1]->modelos as $modelo){
                if($modelo->idmarca == $idmarca){
                    $arrayModelos[] = $modelo;
                }
            }
            $this->modelos = $arrayModelos;
            Log::info(json_encode($arrayModelos));
        }
    }



}


