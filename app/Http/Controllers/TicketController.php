<?php

namespace App\Http\Controllers;


class TicketController extends Controller
{


    public static function getTickets()
    {

        $results =  DB::table('tickets')->get();

       echo($results(1)->ID);


    }
    }







