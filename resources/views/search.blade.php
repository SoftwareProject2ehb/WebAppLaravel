@extends ('layout.master')

@section ('head')
	<title>Route zoeken</title>
@stop

@section ('header')

@stop

@section ('content')
    @foreach($result->connection as $route)
    <div class="row">
        <div class="col-md-2 col-xs-5">
            <h4><span class="glyphicon glyphicon-time status {!! ($route->departure->delay !== "0" ? 'delayed' : 'on-time') !!}"></span></h4>
        </div>
        <div class="col-md-5 col-xs-7">
            <h4></h4>
        </div>


        <div class="col-md-10 col-xs-7">
            <h4>{!! gmdate('d/m/Y',$route->departure->time) !!}</h4>
        </div>
    </div>

    <div class="result">
        <div class="row">


            <div class="col-md-5 col-xs-5">

                <h4>
                    {!! $route->departure->stationinfo->standardname !!} ({!! substr($route->departure->vehicle,8)  !!})

                </h4>

            </div>
            <div class="col-md-7 col-xs-7">
                <h5>
                    spoor {!! $route->departure->platform !!}
                    </br>
                    {!! gmdate('H:i',$route->departure->time) !!}
                    @if($route->departure->delay !== "0")
                       <span style="color:red"> +{!!gmdate('i',$route->departure->delay)  !!} min.</span>
                    @endif


                </h5>
            </div>
        </div>
        @if(property_exists($route,"vias"))
            @foreach($route->vias->via as $via)
                <div class="row">
                <div class="col-md-5 col-xs-5" style="padding-left: 5em" >
                    <h5  >
                        {!! $via->stationinfo->standardname !!} ({!! substr($via->vehicle,8) !!})
                    </h5>
                </div>


                    <div class="col-md-7 col-xs-7">
                        <h5>
                            spoor {!! $via->departure->platform !!}
                            </br>
                            {!! gmdate('H:i',$via->departure->time) !!}
                        </h5>
                    </div>
                </div >
            @endforeach
        @endif


            <div class="row">


                <div class="col-md-5 col-xs-5">

                    <h4>
                        {!! $route->arrival->stationinfo->standardname !!}
                    </h4>

                </div>
                <div class="col-md-7 col-xs-7">
                    <h5>
                        spoor {!! $route->arrival->platform !!}
                        </br>
                        {!! gmdate('H:i',$route->arrival->time) !!}

                    </h5>
                </div>

        </div>

    </div>
@endforeach


 {{-- @foreach($result->Routes as $route)

      @if(!empty($route->TransferStations) && !empty($route->Trains) && $route->TransferStations[0]->ArrivalPlatform !== null)
    @if (!empty($route->TransferStations)  )
        <div class="row">
            <div class="col-md-2 col-xs-5">
                <h4><span class="glyphicon glyphicon-time status on-time"></span></h4>
            </div>
            <div class="col-md-10 col-xs-7">
                <h4>{!! $result->StepOn !!} , {!! $result->StepOff !!}</h4>
            </div>
        </div>
    @endif

    <div class="result">
        <div class="row">

            @foreach($route->TransferStations as $ts)

                        @if($ts->TransferAt == null)
                    <div class="col-md-5 col-xs-5">
                        <h4>
                            {!! $result->StepOn !!} ({!! $ts->FullId  !!})
                        </h4>
                    </div>
                        @else
                    <div class="col-md-5 col-xs-5" style="padding-left: 5em" >
                        <h5>
                            {!! $ts->TransferAt !!} ({!! $ts->FullId  !!})
                        </h5>
                    </div>
                        @endif





                    <div class="col-md-7 col-xs-7">
                        <h5>

                            spoor {!! $ts->ArrivalPlatform !!}
                            </br>
                            {!! $ts->ArrivalTime !!}
                            </br>
                        </h5>
                    </div>





    @endforeach
        </div>
                <div class="row">
                    <div class="col-md-5 col-xs-5">
                        <h4>
                            {!! $result->StepOff !!}
                        </h4>
                    </div>
                    <div class="col-md-7 col-xs-7">
                        <h5>

                            @foreach(end($route->Trains)->Stops->Stations as $station)
                                @if($station->Name == $result->StepOff )
                          spoor {!! $station->Platform !!} <br>
                            {!! $station->Time->Arrival !!}
                                @endif
                                @endforeach
                        </h5>
                    </div>
                </div>

    </div>



@endif
  @endforeach

--}}


@stop

@section ('footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stop