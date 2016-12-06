@extends ('layout.master')

@section ('head')
	<title>Route zoeken</title>
@stop

@section ('header')

@stop

@section ('content')
    
        <div id="search" class="container-fluid">
            <div class="container">
                <h1>Search Trains</h1>
                <form method="POST" action="{!! route('home') !!}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <label for="from">from</label>
                                <select class="selectpicker form-control "  type="text" id="from" name="from" data-live-search="true">
                                    
                                </select>

                        </div>
                        <div class="col-md-6 col-xs-12">
                            <label for="to">to</label>
                                <select class="selectpicker form-control "  type="text" id="to" name="to" data-live-search="true">
                                                                                                                                                     
                                </select>
                        </div>
                    </div>
                   <!--- <div class="row spaced">
                        <div class="col-md-6 col-xs-0">
                        </div>
                        <div class="col-md-4 col-xs-7">
                            <label for="date">date</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="date" class="form-control" id="date" value="2016-11-28">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-th"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-xs-5">
                            <label for="time">time</label>
                            <div class="input-group date" data-provide="datepicker">
                                <input type="time" class="form-control" id="time" value="11:15">
                                <div class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    -->
                    <div class="row spaced">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <span class="pull-right"><input class="btn btn-primary btn-lg" type="submit" value="Search"  ></span>
                        </div>
                    </div>
                 </div>
                 </form>
            </div>
        </div>
@stop

@section ('footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script> 
        <script src="./js/csv/jquery-csv/src/jquery.csv.min.js" ></script>
        <script src="./js/csv/csvread.js" charset="utf-8"></script>

@stop