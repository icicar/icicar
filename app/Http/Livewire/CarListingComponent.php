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
    public $selectedPrecioMin;
    public $selectedPrecioMax;
    public $vehiculos;


    public function mount(Request $request)
    {
        $this->vehiculos = [];
        $this->selectedMarca=$request->session()->get('selectedMarca');
        $this->selectedModelo=$request->session()->get('selectedModelo');
        $this->selectedPrecioMin=$request->session()->get('selectedPrecioMin');
        $this->selectedPrecioMax=$request->session()->get('selectedPrecioMax');
<<<<<<< HEAD
        dd($request);
=======
>>>>>>> 8f6edd85e505f633787d1890ee651604dc177563
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
