@extends('layouts.app')

@section('content')
    <div >
        <div class="dropdown">
            <div class="text-center">
                <button class="text-center btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Job
                </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Cook for McDonald's @ Manchester</a>
                <a class="dropdown-item" href="#">Sales Attendent for Quik Trip @ Chesterfield</a>
            </div>
            </div>
            <div class="card_margin card" class="McdonaldsManchesterCook">
                <div class="jobDescription card-body">
                    <h2 class="card-title">Cook needed for the McDonald's on Manchester Rd.</h2></li>
                <p class="card-description">The cook will be paid $9.00 an hour. Email the employer for more information and to get an interview.</p></li>
            <hr>

            <div class="emailEmployer" style="margin:auto">
                <h2>Contact Company</h2>
                <form action="">
                    <div class="form-group">
                        <label for="body">Your message</label>
                        <textarea class="form-control contact-form" name="body" cols="30" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>
            </div>
            <hr>
            <div class="jobAddress">
                <h3>Address</h3>
                <p>1831 Manchester Rd. 63017, Manchester MO, USA</p>
                <div class="googleMaps">
                  <div id="map" style="width:400px;height:400px;background:yellow"></div>

                  <script>
                  var geocoder;
      var map;

      function initialize() {

          geocoder = new google.maps.Geocoder();

          var latlng = new google.maps.LatLng(-34.397, 150.644);
          var mapOptions = {
              zoom: 8,
              center: latlng
          };

          map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

          // Call the codeAddress function (once) when the map is idle (ready)
          google.maps.event.addListenerOnce(map, 'idle', codeAddress);
      }

      function codeAddress() {

          // Define address to center map to
          var address = 'Paris, France';

          geocoder.geocode({
              'address': address
          }, function (results, status) {

              if (status == google.maps.GeocoderStatus.OK) {

                  // Center map on location
                  map.setCenter(results[0].geometry.location);

                  // Add marker on location
                  var marker = new google.maps.Marker({
                      map: map,
                      position: results[0].geometry.location
                  });

              } else {

                  alert("Geocode was not successful for the following reason: " + status);
              }
          });
      }

      initialize();
                   </script>



                   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZvv1cwFNNWACfgJhZLCFu72OdAoSTF2k&callback=initMap"
                       async defer></script>
                </div>
            </div>
                </div>
                      @endsection
