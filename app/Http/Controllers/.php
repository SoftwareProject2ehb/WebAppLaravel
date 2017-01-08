if ($result != null) {
foreach ($result->Routes as $route) {
if (!empty($route->Trains) && !empty($route->TransferStations)) {
foreach ($route->TransferStations as $ts) {
$date = date('H:i', strtotime($ts->ArrivalTime));
$ts->ArrivalTime = $date;
$date = date('H:i', strtotime($ts->DepartureTime));
$ts->DepartureTime = $date;
$date = date('H:i', strtotime($ts->StepOverTime));
$ts->StepOverTime = $date;
}
$ls = end(end($route->Trains)->Stops->Stations);
$date = date('j M, H:i', strtotime($ls->Time->Arrival));
$ls->Time->Arrival = $date;
array_push($laststops, $ls);
array_push($routes, $route);
}
}
$collection = new RouteInfo();
$collection->setRoutes($routes);
$collection->setLaststops($laststops);
return view('getroute')->with('result', $result)->with('collection', $collection);
} else {
return view('routefail');
}
}