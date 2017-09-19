<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

class BuscaCepController extends Controller
{

    /**
     * @param string
     * @return cep in format JSON
     */
    public function search($cep)
    {
        $client = new Client();
        $url = "viacep.com.br/ws/". $cep ."/json/";
        $response = $client->get($url);
        $body = json_decode($response->getBody(), TRUE);

        return $body;
    }

}
