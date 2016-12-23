<?php

namespace App\Http\Controllers;
use App\Utility;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Log;

class LiveboardController extends Controller{


public function getBoard(Request $request)
{

    $stepOn = $request->input('from');


    // check if string contains '/'
    if (strpos($stepOn, '/') !== false) {
        $stepOn = strtok($stepOn, '/');
    }


    $traintracksString = "?station=" . $stepOn . "&fast=true&format=json";
    //echo($traintracksString);
    $client = new Client(['base_uri' => 'https://api.irail.be/liveboard/']);

    $result = null;
    try {

        $response = $client->request('GET', (string)$traintracksString, ['verify' => false]);
        $result = json_decode($response->getBody());
    } catch (ClientException $e) {
    } catch (ServerException $e) {
    }
    if ($result != null ) {


        return view("liveboard")->with("result", $result);
    } else {
        return view('failed');
    };

}
}







