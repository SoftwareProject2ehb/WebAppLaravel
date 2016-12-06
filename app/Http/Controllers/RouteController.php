<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

class RouteController extends Controller{

public function getRoutes(Request $request)
{
    $stepOn = $request->input('from');
    $stepOff = $request->input('to');
    $traintracksString = $stepOn . "/" . $stepOff;
    $client = new Client(['base_uri' => 'https://traintracks.online/api/Route/']);
    $result = null;
    try {

        $response = $client->request('GET', (string) $traintracksString, ['verify' => false]);
        $result = json_decode($response->getBody());
    } catch (ClientException $e) { } catch (ServerException $e) { }
    $routes = array();
    if ($result != null) {
        foreach ($result->Routes as $route) {
            if(!empty($route->TransferStations) && !empty($route->Trains)){
                foreach ($route->TransferStations as $transferStation) {

                    $date = date('H:i', strtotime($transferStation->ArrivalTime));
                    $transferStation->ArrivalTime = $date;
                    $date = date('H:i', strtotime($transferStation->DepartureTime));
                    $transferStation->DepartureTime = $date;
                    $date = date('H:i', strtotime($transferStation->StepOverTime));
                    $transferStation->StepOverTime = $date;

                }

            }
            array_push($routes,$route);
        }
        return view('search')->with('result',$result)->with('routes',$routes);
    }
    else{

    return view('failed');
    }


}






}



