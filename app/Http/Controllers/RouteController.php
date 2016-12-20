<?php

namespace App\Http\Controllers;
use App\Utility;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Log;

class RouteController extends Controller{


public function getRoutes(Request $request)
{

    $stepOn = $request->input('from');
    $stepOff = $request->input('to');
    $date = $request->input('date');
    $time= $request->input('time');
    $timeSel= $request->input('radio');
    $date =Utility::formatDate($date);
    $time =Utility::formatTime($time);


    // check if string contains '/'
    if(strpos($stepOn, '/') !== false){
       $stepOn= strtok($stepOn,'/');
    }
    if(strpos($stepOff, '/') !== false){
        $stepOff= strtok($stepOff,'/');
    }

    $traintracksString = "?to=".$stepOff."&from=".$stepOn."&format=json"."&date=".$date."&time=".$time."&timeSel=".$timeSel;

    $client = new Client(['base_uri' => 'https://api.irail.be/connections/']);

    $result = null;
    try {

        $response = $client->request('GET', (string) $traintracksString, ['verify' => false]);
        $result = json_decode($response->getBody());
    } catch (ClientException $e) { } catch (ServerException $e) { }
    if ($result != null) {




        return view("search")->with("result",$result);
    }
    else{return view('failed');};




   /* if ($result != null) {
        foreach ($result->Routes as $route) {
            if(!empty($route->TransferStations) && !empty($route->Trains)){
                foreach ($route->TransferStations as $transferStation) {

                    $date = date('H:i', strtotime($transferStation->ArrivalTime));
                    $transferStation->ArrivalTime = $date;
                    //echo ( $transferStation->ArrivalTime .  "<br>");
                    $date = date('H:i', strtotime($transferStation->DepartureTime));
                    $transferStation->DepartureTime = $date;
                    //echo ( $transferStation->DepartureTime.  "<br>");
                    //$date = date('H:i', strtotime($transferStation->StepOverTime));
                   // $transferStation->StepOverTime = $date;
                   // echo ( $transferStation->StepOverTime.  "<br>");



                    }

                foreach(end($route->Trains)->Stops->Stations as $station)
                {

                    if($station->Name == $result->StepOff)
                    {
                        $date = date('H:i', strtotime($station->Time->Arrival));
                        $station->Time->Arrival = $date;

                }
                }

            }



}

        return view('search')->with('result',$result)->with('lastStop',$ls);
    }
    else{*/



}
}



