<?php

namespace App\Http\Controllers;

use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function getMarcasVehiculos()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_MARCAS, $data);
    }
}
