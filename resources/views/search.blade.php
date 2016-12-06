@extends ('layout.master')

@section ('head')
	<title>Route zoeken</title>
@stop

@section ('header')

@stop

@section ('content')



    @for ($i=0; $i < sizeof($routes);$i++)

        <div class="row">
            <div class="col-md-2 col-xs-5">
                <h4><span class="glyphicon glyphicon-time status on-time"></span></h4>
            </div>
            <div class="col-md-10 col-xs-7">
                <h4>{!! $result->StepOn !!} , {!! $result->StepOff !!}</h4>
            </div>




            @foreach($route->TransferStations as $ts)
            <div class="result">
                <div class="row">
                    <div class="col-md-5 col-xs-5">
                        <h5>
                            {!! $result->Stepon !!}
                        </h5>
                    </div>
                    <div class="col-md-7 col-xs-7">
                        <h5>
                            <br>
                            12:45
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-xs-5">

                    </div>
                    <div class="col-md-7 col-xs-7">
                        <h5>There are currently no delays</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-5 col-xs-5">
                        <h5>Brussel-Zuid</h5>
                    </div>
                    <div class="col-md-7 col-xs-7">
                        <h5>
                            Spoor 15<br>
                            13:30
                        </h5>
                    </div>
                </div>
            </div>

    @endforeach
    @endfor
                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status on-time"></span> IC 5678</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                12:45
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>There are currently no delays</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status cancelled"></span> IC 9876</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>This train is cancelled</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                14:15
                            </h5>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2 col-xs-5">
                        <h4><span class="glyphicon glyphicon-time status cancelled"></span> IC 9876</h4>
                    </div>
                    <div class="col-md-10 col-xs-7">
                        <h4>Antwerpen-Centraal - Brussel-Zuid</h4>
                    </div>
               </div>
                <div class="result">
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>
                                Antwerpen-Centraal
                            </h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 24<br>
                                13:30
                            </h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">

                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>This train is cancelled</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-xs-5">
                            <h5>Brussel-Zuid</h5>
                        </div>
                        <div class="col-md-7 col-xs-7">
                            <h5>
                                Spoor 15<br>
                                14:15
                            </h5>
                        </div>
                    </div>
                </div>
@stop

@section ('footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@stop