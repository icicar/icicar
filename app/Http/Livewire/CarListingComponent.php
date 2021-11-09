<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Helpers\ApiConnectionHelper;
use App\constants\MyConstants;

class CarListingComponent extends Component
{
    public $selectedMarca;
    public $selectedModelo;
    public $minPrecio;
    public $maxPrecio;
    public $vehiculos;


    public function mount(Request $request)
    {
        dd($request->session());
        $this->vehiculos = [];
        $this->selectedMarca=$request->session()->get('selectedMarca');
        $this->selectedModelo=$request->session()->get('selectedModelo');
    }

    public function render()
    {
        $data="?idmarca=".$this->selectedMarca."&idmodelo=".$this->selectedModelo;
        $this->vehiculos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_VEHICULOS, $data);
        return view('livewire.car-listing-component');
    }

    public function getDetalleVehiculo($selectedVehiculo){
        $this->selectedVehiculo = $selectedVehiculo;
        return redirect()->to('detalles-vehiculo')
            ->with('selectedVehiculo',  $selectedVehiculo);
    }
}
