<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Http\Request;

class IndexFormComponent extends Component
{
    public $marcas;
    public $modelos;
    public $rangoPrecios;
    public $allMarcas = '?all=1&limit=100';

    public $selectedMarca = NULL;
    public $selectedModelo = NULL;
    public $selectedPrecioMin;
    public $selectedPrecioMax;
    public $resultadosEncontrados = NULL;
    public $selectedAmount;

    public function mount()
    {
        $this->marcas = [];
        $this->modelos;
        $this->rangoPrecios;
        $this->selectedAmount;
        $this->selectedPrecioMin;
        $this->selectedPrecioMax;
    }

    public function updatedselectedPrecioMin($selectedPrecioMin)
    {
        $this->goal->update([
            'selectedPrecioMin' => $selectedPrecioMin
        ]);
    }

    public function render()
    {
        $this->marcas = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MARCAS, $this->allMarcas);
        $this->rangoPrecios = ApiConnectionHelper::getApi(MyConstants::API_FULL_URL.MyConstants::URI_PRECIO_MIN_MAX);
        $this->emit('lanzar');
        return view('livewire.index-form-component');

    }

    public function selectedMarca($idmarca)
    {
        if(!is_null($idmarca)){
            $data = '?idmarca='. $idmarca;
            $this->modelos = ApiConnectionHelper::getDataApi(MyConstants::API_FULL_URL.MyConstants::URI_MODELOS, $data);
            $this->selectedMarca = $idmarca;
            $this->emit('lanzar');
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

    public function selectedAmount($amount)
    {
        $this->selectedAmount = $amount;
    }

    public function getMinMaxPrice()
    {
        $this->rangoPrecios = ApiConnectionHelper::getApi(MyConstants::API_FULL_URL.MyConstants::URI_PRECIO_MIN_MAX);
    }

    public function getResultados(Request $request){
        return redirect()->to('listado-vehiculos')
            ->with('selectedMarca',  $this->selectedMarca)
            ->with('selectedModelo', $this->selectedModelo)
            ->with('selectedAmount', $this->selectedAmount)
            ->with('selectedPrecioMin' , $this->selectedPrecioMin)
            ->with('selectedPrecioMax' , $this->selectedPrecioMax);
    }

}


