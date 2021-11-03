<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class IndexFormComponent extends Component
{
    public $marcas;
    public $modelos;
    public $allMarcas = '?all=1&limit=100';

    public $selectedMarca = NULL;
    public $selectedModelo = NULL;
    public $resultadosEncontrados = NULL;

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

    public function selectedModelo($idmodelo)
    {
        if(!is_null($idmodelo)){
            $data = '?idmarca='. $this->selectedMarca;
            $this->modelos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MODELOS, $data);
            $this->selectedModelo = $idmodelo;
        }
    }

    public function getResultados(Request $request){

        return redirect()->to('listado-vehiculos')
            ->with('selectedMarca',  $this->selectedMarca)
            ->with('selectedModelo', $this->selectedModelo);
    }

}


