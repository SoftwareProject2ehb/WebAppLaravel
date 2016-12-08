@extends ('layout.master')

@section ('head')
	<title>Route zoeken</title>
@stop

@section ('header')

@stop

@section ('content')



  @foreach($result->Routes as $route)

      @if(!empty($route->TransferStations) && !empty($route->Trains))
    @if (!empty($route->TransferStations) )
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
                            {!! $result->StepOn !!}
                        </h4>
                    </div>
                        @else
                    <div class="col-md-5 col-xs-5" style="padding-left: 5em" >
                        <h5>
                            {!! $ts->TransferAt !!}
                        </h5>
                    </div>
                        @endif





                    <div class="col-md-7 col-xs-7">
                        <h5>

                            spoor {!! $ts->ArrivalPlatform !!}
                            </br>
                            {!! $ts->DepartureTime !!}
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
                          spoor {!! $lastStop->platform  !!} <br>
                            {!! $lastStop->time !!}
                        </h5>
                    </div>
                </div>

    </div>



@endif
  @endforeach




@stop

@section ('footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stop