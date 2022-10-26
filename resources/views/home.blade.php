@extends('layouts.main', ['activePage' => 'inicio', 'titlePage' => __('INICIO')])
@section('content')
  <div class="content">
    <!DOCTYPE html>
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
              <div id ="map"> </div> 
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCKiIqCdZGrVxx06LSbe7uG3zXOq1Cz5k&callback=initMap" async defer></script>
        <script>
            
          var map;
           function initMap() {
            map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: 13.732152604316594, lng: -89.7177017184798},
              zoom: 13,
            });
            var marker = new google.maps.Marker({
              position: {lat: 13.732152604316594, lng: -89.7177017184798},
              map: map,
            });
          }
          </script>
          <script type="text/javascript"
              src="https://maps.google.com/maps/api/js?key={{ env('AIzaSyCseii9upCVOnV1SOey-ocNNcjPM0YIHw8') }}&callback=initMap" ></script>
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
		<label for="longitude" class="col-md-12 col-form-label">Latitude </label>
		<div class="col-md-12">
		<input id="latitude" type="text" class="form-control" name="latitude" value="'+latitude+'" required autofocus>
	</div>
    </div>
  <div class="form-group">
	<label for="longitude" class="col-md-12 col-form-label">Longitude </label>
	<div class="col-md-12">
	<input id="longitude" type="text" class="form-control" name="longitude" value="'+ longitude +'" required autofocus>
	</div>
 </div>
		 
	$('#updateBody').html(updateData);
	});
   });
 
    $('.updateLocationRecord').on('click', function() {
	var values = $(".locations-update-record-model").serializeArray();
	var postData = {
	latitude: values[0].value,
	longitude : values[1].value,
  };
 
var updates = {};
updates['locations' + updateID] = postData;
 
firebase.database().ref().update(updates);
 
$("#update-modal").modal('hide');
});
$("body").on('click', '.removeData', function() {
	var id = $(this).attr('data-id');
        $('body').find('.locations-remove-record-model').append(<input name="id" type="hidden" value="'+ id +'">);
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
    const firebaseConfig = {
  apiKey: "AIzaSyDW7gCLy4VTDKhKKFNkwN0_0MqNgikercc",
  authDomain: "buses-bb36f.firebaseapp.com",
  projectId: "buses-bb36f",
  storageBucket: "buses-bb36f.appspot.com",
  messagingSenderId: "796856910422",
  appId: "1:796856910422:web:a83af17418b13326a431f7",
  measurementId: "G-6FX3EQ20CZ"
     };
    const app = initializeApp(firebaseConfig);
       const analytics = getAnalytics(app);
     </script>
     </body>
 <
@endsection

    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
