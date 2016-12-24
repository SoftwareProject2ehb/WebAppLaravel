<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
        <meta name="theme-color" content="#647187">
        
        @yield ('head')

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/main.css">
    </head>
    <body>
          <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home')}}">WebApp</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::is('route')  || Request::is('/') ? 'active' : '' }}"><a href="{{ route('home')}}">Search Trains </a>  <span class="sr-only">(current)</span></a></li>

                        <li class=" {!! (Request::is('liveboard') ? 'active' : '') !!}"><a href="{{ route('liveboard')}}">Liveboard </a> </li>
                        <li class=" {!! (Request::is('tickets') ? 'active' : '') !!}"><a href="{{ route('tickets')}}">Tickets </a> </li>
                        <li class=" {!! (Request::is('about') ? 'active' : '') !!}"><a href="{{ route('about')}}">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield ('header')

        <div class="col-md-10 col-md-offset-1 container">
            @yield ('content')
        </div>

        @yield ('footer')
    </body>

</html>