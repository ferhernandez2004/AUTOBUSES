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
              <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong>Location</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form id="addLocation" class="" method="POST" action="">
                                    <div class="form-group">
                                        <label for="latitude" class="col-md-12" col-form-label>Latitude</label>
                                        <div class="col-md-12">
                                            <input id="latitude" type="text" class="form-control" name="latitude" value=""  autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="longitude" class="col-md-12 col-form-label"> Longitude </label>
                                        <div class="col-md-12">
                                            <input id="longitude" type="text" class="form-control" name="longitude" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 col-md-offset-3">
                                            <button type="button" class="btn btn-primary btn-block desabled" id="submitLocation">
                                                Registrar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card card-default">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <strong>Locations</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Latitude</th>
                                        <th>Lintitude</th>
                                        <th width="180" class="text-center">Acción</th>
                                    </tr>
                                    <tbody id="tbody">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      </body>
      </html></h1>
@endsection

<script>
  firebase.database().ref('locations/').on('value', function(snapshot){
  var value = snapshot.val();
  var contents = [];
  $.each(value, function(index, value){
    if(value){
contents.push(
      <tr>
        <td>'+value.latitude+'</td>
        <td>'+value.longitude+'</td>
        <td><a data-toogle="modal" data-target="#update-modal" class="btn btn-outline-success updateData" data-id="'+index+'">Actualizar</a></td>
        <td><a data-toogle="modal" data-target="#update-modal" class="btn btn-outline-danger removeData" data-id="'+index+'">Actualizar</a></td>
        </tr>
        );
    }
    
    lastIndex = index;


  });
  $('#tbody').html(contents);
  $('#submitLocations').removeClass('disabled');
});

$('submitLocations').on('click', function(){
  var values = $('#addLocation').serializeArray();
  var latitude = values[0].value;
  var longitude = values[1].value;
  var locationID = lastindex+1;
});

firebase.database().ref('locations/' + locationID).set({
  latitude: latitude,
  longitude: longitude
});

lastIdex = locationID;
$('#addLocation input').value('');

var updateID = 0;
$('body').on('click', '.updateData', function() {
	updateID = $(this).attr('data-id');
	firebase.database().ref('locations/' + updateID).on('value', function(snapshot) {
		var values = snapshot.val();
		var updateData = <div class="form-group">
		<label for="longitude" class="col-md-12 col-form-label">Latitude X</label>\
		<div class="col-md-12">
		<input id="latitude" type="text" class="form-control" name="latitude" value="'+latitude+'" required autofocus>\
	</div>
</div>
<div class="form-group">
	<label for="longitude" class="col-md-12 col-form-label">Longitude Y</label>\
	<div class="col-md-12">
	<input id="longitude" type="text" class="form-control" name="longitude" value="'+ longitude +'" required autofocus>\
	</div>
</div>
		 
	$('#updateBody').html(updateData);
	});
});
 
$('.updateLocationRecord').on('click', function() {
	var values = $(".locations-update-record-model").serializeArray();
	var postData = {
	longitude : values[0].value,
	longitude : values[1].value,
};
 
var updates = {};
updates['locations' + updateID] = postData;
 
firebase.database().ref().update(updates);
 
$("#update-modal").modal('hide');
});
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
        $('body').find('.locations-remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});
 
$('.deleteMatchRecord').on('click', function(){
	var values = $(".locations-remove-record-model").serializeArray();
	var id = values[0].value;
	firebase.database().ref('locations/' + id).remove();
	$('body').find('.locations-remove-record-model').find( "input" ).remove();
	$("#remove-modal").modal('hide');
	});
$('.remove-data-from-delete-form').click(function() {
	$('body').find('.locations-remove-record-model').find( "input" ).remove();
});
  </script>
 

<!-- Delete Modal -->
<form action="" method="POST" class="locations-remove-record-model">
    <div id="remove-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Borrar Location</h4>
                    <button type="button" class="close remove-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h4>¿Seguro que desea borrar la ubicación?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect remove-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light deleteMatchRecord">Borrar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Update Model -->
<form action="" method="POST" class="locations-update-record-model form-horizontal">
    <div id="update-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="custom-width-modalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog" style="width:55%;">
            <div class="modal-content" style="overflow: hidden;">
                <div class="modal-header">
                    <h4 class="modal-title" id="custom-width-modalLabel">Actualizar location</h4>
                    <button type="button" class="close update-data-from-delete-form" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body" id="updateBody">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect update-data-from-delete-form" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success waves-effect waves-light updateLocationRecord">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>



<script>
  var config = {
        apiKey: "{{ config('services.firebase.api_key') }}",
authDomain: "{{ config('services.firebase.auth_domain') }}",
databaseURL: "{{ config('services.firebase.database_url') }}",
projectId: "{{ config('services.firebase.project_id') }}",
storageBucket: "{{ config('services.firebase.storage_bucket') }}",
messagingSenderId: "{{ config('services.firebase.messaging_sender_id') }}",
appId: "{{ config('services.firebase.app_id') }}"
    };

    firebase.initializeApp(config);
    var_database = firebase.database();
    var_lastIndex = 0;
    </script>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>