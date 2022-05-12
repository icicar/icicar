<?php

namespace App\Http\Controllers;

use App\constants\MyConstants;
use App\Helpers\ApiConnectionHelper;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function getListadoVehiculos(Request $request){
        //paginador
        $vehiculosPagina=12;
        $pagina=1;
        $paginaAnterior=0;

        $offset=0;
        if($request && $request->pag){
            $pagina=$request->pag;
            $offset=($pagina-1)*$vehiculosPagina;
        }
        $numPaginas=1;
        $paginaSiguiente=$pagina+1;
        $paginaAnterior=$pagina-1;
        $dataVehiculos='?limit='.$vehiculosPagina.'&offset='.$offset;



        $dataModelos='';
        $fechaMatriculacion=null;
        $selectedMarca=null;
        $selectedModelo=null;
        $selectedCarburante=null;
        $selectedTipoCambio=null;
        $selectedEtiqueta=null;
        $kilometros=null;
        if ($request->isMethod('post')){
            if($request->fechaMatriculacion && $request->fechaMatriculacion!=null && $request->fechaMatriculacion!="null"){
                $dataVehiculos.='&annomatricula='.$request->fechaMatriculacion;
                $fechaMatriculacion=$request->fechaMatriculacion;
            }
            if($request->idmarca && $request->idmarca!=null && $request->idmarca!="null"){
                //si existe una marca seleccionada podemos filtrar los modelos
                $selectedMarca=$request->idmarca;
                $dataModelos='?idmarca='.$request->idmarca;
                $dataVehiculos.='&idmarca='.$request->idmarca;
                //si existe un modelo seleccionado concreto podemos filtrar los vehiculos por marca y modelos
                if($request->idmodelo && $request->idmodelo!=null && $request->idmodelo!="null"){
                    $dataVehiculos.='&idmodelo='.$request->idmodelo;
                    $selectedModelo=$request->idmodelo;
                }
            }

            if($request->kilometros && $request->kilometros!=null){
                $kilometros=$request->kilometros;
                $dataVehiculos.='&kms='.$kilometros;
            }

            if($request->idcarburante && $request->idcarburante!=null && $request->idcarburante!="null"){
                $selectedCarburante=$request->idcarburante;
                $dataVehiculos.='&idcarburante='.$selectedCarburante;
            }

            if($request->idtipocambio && $request->idtipocambio!=null && $request->idtipocambio!="null"){
                $selectedTipoCambio=$request->idtipocambio;
                $dataVehiculos.='&idtipocambio='.$selectedTipoCambio;
            }
            if($request->etiqueta && $request->etiqueta!=null && $request->etiqueta!="null"){
                $selectedEtiqueta=$request->etiqueta;
                $dataVehiculos.='&etiqueta='.$selectedEtiqueta;
            }
        }



        //LLAMADAS API
        $rangoPrecios = ApiConnectionHelper::getApi(MyConstants::API_FULL_URL.MyConstants::URI_PRECIO_MIN_MAX);
        $marcas = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MARCAS, '?all=1&limit=100');
        $modelos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_MODELOS, $dataModelos);
        $carburantes= ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_CARBURANTES, '');
        $carburantes=$carburantes[1]->carburantes;
        $añosMatriculacion = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_AÑOS, '');
        $añosMatriculacion=$añosMatriculacion[1]->annosmatricula;
        $tiposCambio=ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_TIPOS_CAMBIO, '');
        $tiposCambio=$tiposCambio[1]->tiposcambio;
        $vehiculos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_VEHICULOS, $dataVehiculos);

        $vehiculosEncontrados=$vehiculos[1]->totalelements;
        if($vehiculosEncontrados>0){
            $numPaginas=ceil($vehiculosEncontrados/$vehiculosPagina);
        }

        return view('car-listing.car-listing')
            ->with('vehiculosEncontrados',$vehiculosEncontrados)
            ->with('numPaginas',$numPaginas)
            ->with('paginaSiguiente',$paginaSiguiente)
            ->with('paginaAnterior',$paginaAnterior)
            ->with('pagina',$pagina)
            ->with('vehiculosPagina',$vehiculosPagina)
            ->with('selectedEtiqueta',$selectedEtiqueta)
            ->with('selectedTipoCambio',$selectedTipoCambio)
            ->with('tiposCambio',$tiposCambio)
            ->with('selectedCarburante',$selectedCarburante)
            ->with('carburantes',$carburantes)
            ->with('fechaMatriculacion',$fechaMatriculacion)
            ->with('kilometros',$kilometros)
            ->with('selectedModelo',$selectedModelo)
            ->with('modelos',$modelos[1]->modelos)
            ->with('selectedMarca',$selectedMarca)
            ->with('marcas',$marcas[1]->marcas)
            ->with('añosMatriculacion',$añosMatriculacion)
            ->with('vehiculos',$vehiculos);
    }

    public function getVehiculo($idvehiculo){
        $dataVehiculos='?idvehiculoopera='.$idvehiculo;
        $vehiculos = ApiConnectionHelper::getDataApi(MyConstants::HTTPS.MyConstants::API_URL.MyConstants::URI_VEHICULOS, $dataVehiculos);
        $vehiculo=($vehiculos[1]->vehiculos[0]) ? $vehiculos[1]->vehiculos[0] : null;
        return view('car-details.car-details')
            ->with('vehiculo',$vehiculo);

    }

    public function solicitaInfo($idVehiculo,Request $request){

    }

    public function solicitaPrueba($idVehiculo,Request $request){

    }

    public function hacerOferta($idVehiculo,Request $request){

    }

    public function enviarAmigo($idVehiculo,Request $request){

    }

}
