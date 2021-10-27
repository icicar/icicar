<?php
    namespace App\Helpers;

    use App\constants\MyConstants;

    class ApiConnectionHelper
    {
        public static function getApi($uri)
        {

            $username = MyConstants::API_USER;
            $password = MyConstants::API_PWD;
            $baseUrl = MyConstants::API_URL;

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $baseUrl. $uri,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_USERPWD => "$username:$password"
            ));
            $response = curl_exec($curl);

            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

            return [$httpCode, json_decode($response)];
        }

        public static function getDataApi($url, $data)
        {

            $username = MyConstants::API_USER;
            $password = MyConstants::API_PWD;
            $baseUrl = MyConstants::API_URL;
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => $url.$data,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_USERPWD => "$username:$password",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_SSL_VERIFYPEER => false,

            ));
            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if (curl_errno($curl)) {
                print curl_error($curl);
             }

             curl_close($curl);
             //dd(json_decode($response));
            return [$httpCode, json_decode($response)];
        }

        public static function postDataApi($uri, $data)
        {
            $username = MyConstants::API_USER;
            $password = MyConstants::API_PWD;
            $baseUrl = MyConstants::API_URL;
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => $baseUrl.$uri,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>$data,
            CURLOPT_USERPWD => "$username:$password",
            ));

            $response = curl_exec($curl);
            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            curl_close($curl);

            return [$httpCode, json_decode($response)];
        }
    }
