<?php
namespace App\constants;

class MyConstants {
    const API_USER = 'icirest';
    const API_PWD =  'jEjhD3x8305';
    const API_URL =  'www.quavitam.net/quarem/apiicicar/v1/';
    const HTTPS = 'https://';
    const URL_CONNECTION = self::HTTPS.self::API_USER.':'.self::API_PWD.'@'.self::API_URL;

    const URI_MARCAS = 'marcas';
    const URI_MODELOS = 'modelos';
    const URI_CARBURANTES = 'carburantes';
    const URI_TIPOS_OFERTA = 'tiposoferta';
    const URI_TIPOS_PERSONA = 'tipospersona';
    const URI_TRATAMIENTOS_PERSONA = 'tratamientosper';
    const URI_PAISES = 'paises';
    const URI_PROVINCIAS = 'provincias';
    const URI_MUNICIPIOS = 'municipios';
    const URI_VEHICULOS = 'vehiculos';
    const URI_OFERTAS = 'ofertas';
}

