<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Helpers\ApiConnectionHelper;
use App\constants\MyConstants;
use Illuminate\Http\Request;

class CarDetailsComponent extends Component
{
    public $selectedVehiculo;

    public function mount(Request $request)
    {
        $this->selectedVehiculo=$request->session()->get('selectedVehiculo');
    }

    public function render()
    {
        $data="?idvehiculoopera=".$this->selectedVehiculo;
        $this->selectedVehiculo = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_VEHICULOS, $data);
        return view('livewire.car-details-component')
                ->with('selectedVehiculo' , $this->selectedVehiculo);
    }
}
