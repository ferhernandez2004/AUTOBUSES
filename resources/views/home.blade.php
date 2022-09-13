@extends('layouts.main', ['activePage' => 'inicio', 'titlePage' => __('INICIO')])

@section('content')
  <div class="content">
    <h1><!DOCTYPE html>
      <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
          
      <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title></title>
          <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
          <style type="text/css">
              #map {
                height: 450px;
              }
          </style>
      </head>
          
      <body>
          <div class="container mt-5">
              <div id="map"></div>
          </div>
        
          <script type="text/javascript">
              function initMap() {
                const myLatLng = { lat: 13.7333, lng: -89.7167 };
                const map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 5,
                  center: myLatLng,
                });
        
                new google.maps.Marker({
                  position: myLatLng,
                  map,
                  title: "Hello Rajkot!",
                });
              }
        
              window.initMap = initMap;
          </script>
        
          <script type="text/javascript"
              src="https://maps.google.com/maps/api/js?key={{ env('AIzaSyDYSTkbL3Cq6ajRoDRFbpWnEL-tL0sj0sU') }}&callback=initMap" ></script>
        
      </body>
      </html></h1>
@endsection
