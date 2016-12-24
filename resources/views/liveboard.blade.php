@extends ('layout.master')

@section ('head')
	<title>LiveBoard</title>
@stop

@section ('header')

@stop

@section ('content')
	<div class="container">

		<form method="POST" action="{!! route('liveboard') !!}">
			{{ csrf_field() }}
			<div class="form-group">
				<div class="row ">
					<div class="col-md-6 col-xs-12">
						<label for="from">Select a station</label>
						<select class="selectpicker form-control "  type="text" id="from" name="from" data-live-search="true">

						</select>
					</div>


				</div>
				<div class="row">

					<div class="col-md-6 col-xs-12">
						<span class="pull-left"><input class="btn btn-primary btn-lg" type="submit" value="Search"  ></span>
					</div>

				</div>

			</div>
		</form>


		@if(isset($result))
			@if(!isset($result->empty))
		<div class="table-responsive">
			<table class="table table-striped" id="liveboard">
				<thead>
				<tr>
					<th>Platform</th>
					<th>Destination</th>
					<th>Departure Time</th>
					<th>Delay</th>
				</tr>
				</thead>
				@foreach($result->departures->departure as $departure)
					<tr class="{!!($departure->delay !== "0" ? 'danger' : '') !!}">

						<td>{!! $departure->platform !!}</td>
						<td>{!! $departure->stationinfo->name !!}</td>
						<td>{!! gmdate('H:i',$departure->time) !!}</td>
						<td>{!! ($departure->delay == '0' ? "" : $departure->delay) !!}</td>

					</tr>
				@endforeach
			</table>
		</div>
				@else
				<h1>There are no trains at this time</h1>

				@endif
		@endif





	</div>
@stop
@section('footer')
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
					<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
					<script src="./js/csv/jquery-csv/src/jquery.csv.min.js" ></script>
					<script src="./js/csv/csvread.js" charset="utf-8"></script>
@stop