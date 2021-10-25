<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Support\Facades\Log;

class IndexFormComponent extends Component
{
    public $marcas;
    public $modelos;
    public $allMarcas = '?all=1&limit=100';

    public $selectedMarca = NULL;

    public function mount()
    {
        $this->marcas = [];
        $this->modelos;
    }

    public function render()
    {
        $this->marcas = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MARCAS, $this->allMarcas);
        return view('livewire.index-form-component');
    }

    public function selectedMarca($idmarca)
    {
        if(!is_null($idmarca)){
            $data = '?idmarca='. $idmarca;
            $this->modelos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MODELOS, $data);
            $this->selectedMarca = $idmarca;
        }
    }



}


