<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

class BuscaCepController extends Controller
{

    /**
     * @param string
     * @return cep in format JSON
     */
    public function busca($cep)
    {dd('aaaa');
    	try{
    		$client = new Client();
    		$url = "viacep.com.br/ws/". $cep ."/json/";
    		$response = $client->get($url);
    	} catch (RequestException $e) {
		    echo Psr7\str($e->getRequest());
		    if ($e->hasResponse()) {
		        echo Psr7\str($e->getResponse());
		    }
		}
		return $response;
    }

}
