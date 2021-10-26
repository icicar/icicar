<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CarListingComponent extends Component
{
    public function render($selectedMarca)
    {
        dd($selectedMarca);
        return view('livewire.car-listing-component');
    }
}
