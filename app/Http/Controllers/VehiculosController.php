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

    public function getModelosVehiculos()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_MODELOS, $data);
    }

    public function getCarburantesVehiculos()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_CARBURANTES, $data);
    }

    public function getTiposOferta()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_TIPOS_OFERTA, $data);
    }

    public function getTiposPersona()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_TIPOS_PERSONA, $data);
    }

    public function getTratamientosPersona()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_TRATAMIENTOS_PERSONA, $data);
    }

    public function getPaises()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_PAISES, $data);
    }

    public function getProvincias()
    {
        $data['idpais'] = 195;
        $data['limit'] = 60;

        ApiConnectionHelper::getDataApi(MyConstants::URI_PROVINCIAS, json_encode($data));
    }

    public function getMunicipios()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_MUNICIPIOS, json_encode($data));
    }

    public function getVehiculos()
    {
        $data = '';
        ApiConnectionHelper::getDataApi(MyConstants::URI_VEHICULOS, json_encode($data));
    }


}
