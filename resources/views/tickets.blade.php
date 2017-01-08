@extends ('layout.master')

@section ('head')
	<title>Route zoeken</title>
@stop

@section ('header')

@stop

@section ('content')

	<div id="search" class="container-fluid">
		<div class="container">
			<h1>Tickets</h1>
			<div class="result">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="glyphicon glyphicon-credit-card status"></span> Standard Ticket</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
					</div>
					<div class="col-md-8">
						<h4>A single or return, from any Belgian station to any Belgian station, ticket. Price varies from route to route.</h4>
					</div>
				</div>
			</div>
			<div class="result">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="glyphicon glyphicon-credit-card status"></span> Weekend Ticket</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
					</div>
					<div class="col-md-8">
						<h4>A single or return, from any Belgian station to any Belgian station, ticket from friday 19:00 until sunday. Half the price. Price varies from route to route.</h4>
					</div>
				</div>
			</div>
			<div class="result">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="glyphicon glyphicon-credit-card status"></span> GoPass One</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><span class="glyphicon glyphicon-euro status"></span> 6,00</h4>
					</div>
					<div class="col-md-8">
						<h4>A single fare, from any Belgian station to any Belgian station, ticket for people under 26 year old.</h4>
					</div>
				</div>
			</div>
			<div class="result">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="glyphicon glyphicon-credit-card status"></span> Senior Citizen Ticket</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><span class="glyphicon glyphicon-euro status"></span> 6,00</h4>
					</div>
					<div class="col-md-8">
						<h4>A return, from any Belgian station to any Belgian station, ticket for people over 65 year old.</h4>
					</div>
				</div>
			</div>
			<div class="result">
				<div class="row">
					<div class="col-md-12">
						<h4><span class="glyphicon glyphicon-credit-card status"></span> Child Ticket</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><span class="glyphicon glyphicon-euro status"></span> -,00</h4>
					</div>
					<div class="col-md-8">
						<h4>A single or return, from any Belgian station to any Belgian station, ticket. Half the price. Price varies from route to route.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

@stop