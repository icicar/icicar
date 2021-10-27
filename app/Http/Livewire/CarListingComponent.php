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
    public $vehiculos;


    public function mount()
    {
        $this->vehiculos = [];
    }

    public function render(Request $request)
    {
        $this->selectedMarca=$request->session()->get('selectedMarca');
        $this->selectedModelo=$request->session()->get('selectedModelo');
        $data="?idmarca=".$this->selectedMarca."&idmodelo=".$this->selectedModelo;
        //dd($request->session()->get('selectedMarca'));

        $this->vehiculos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_VEHICULOS, $data);
        // dd(json_encode($this->vehiculos));
        return view('livewire.car-listing-component');
    }
}
