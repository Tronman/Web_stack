<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

  
  
    <style>
      html,
      body {
        height: 100%;
      }

      .container {
        height: 100%;
        position: relative;
      }

      #hide-listings,
      #show-listings {
        width: 48%;
      }

      

      #map {
        bottom:0px;
        height: 100%;
        left: 362px;
        position: absolute;
        right: 0px;
      }

      .options-box {
        background: #fff;
        border: 1px solid #999;
        border-radius: 3px;
        height: 100%;
        
        padding: 10px 10px 30px 10px;
        text-align: left;
        width: 340px;
      }

      #pano {
        width: 200px;
        height: 200px;
      }

     
    </style>
  


  
    <div class="container">
      <div class="options-box">
        <h4>Distribution Locations</h4>
        <div>
          <input id="show-listings" type="button" value="Show Listings">
          <input id="hide-listings" type="button" value="Hide Listings">
        </div>
        <div id="statusMsg"></div>
        <form class="form-horizontal" action="" name="locationForm" id="locationForm" type="post">
            <div class="form-group">
                     <label for="location" class="col-md-12 control-label">Distribution location </label>
                     <select class="form-control" id="location" name="location">
                         <option>Select your collection point</option>
                         <option value="UJ Kingsway Auckland Campus">UJ Kingsway Auckland Campus</option>
                         <option value="Wits Art Museum">Wits Art Museum</option>
                         <option value="Ellis Park Stadium">Ellis Park Stadium</option>
                         <option value="GoldReef City">GoldReef City</option>
                      </select>
                  
             </div>
            <button type="submit" class="btn order-btn btn-sm" id="locationSubmit">Submit</button><br/>
        </form>
      </div>
      <div id="map"></div>
    </div>
    <script>
      var map;

      // Create a new blank array for all the listing markers.
      var markers = [];

      function initMap() {
        // Create a styles array to use with the map.
        var styles = [
          {
            featureType: 'water',
            stylers: [
              { color: '#19a0d8' }
            ]
          },{
            featureType: 'administrative',
            elementType: 'labels.text.stroke',
            stylers: [
              { color: '#ffffff' },
              { weight: 6 }
            ]
          },{
            featureType: 'administrative',
            elementType: 'labels.text.fill',
            stylers: [
              { color: '#e85113' }
            ]
          },{
            featureType: 'road.highway',
            elementType: 'geometry.stroke',
            stylers: [
              { color: '#efe9e4' },
              { lightness: -40 }
            ]
          },{
            featureType: 'transit.station',
            stylers: [
              { weight: 9 },
              { hue: '#e85113' }
            ]
          },{
            featureType: 'road.highway',
            elementType: 'labels.icon',
            stylers: [
              { visibility: 'off' }
            ]
          },{
            featureType: 'water',
            elementType: 'labels.text.stroke',
            stylers: [
              { lightness: 100 }
            ]
          },{
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [
              { lightness: -100 }
            ]
          },{
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [
              { visibility: 'on' },
              { color: '#f0e4d3' }
            ]
          },{
            featureType: 'road.highway',
            elementType: 'geometry.fill',
            stylers: [
              { color: '#efe9e4' },
              { lightness: -25 }
            ]
          }
        ];

        // Constructor creates a new map - only center and zoom are required.
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -26.2041028 , lng: 28.047305100000017},
          zoom: 13,
          styles: styles,
          mapTypeControl: false
        });

        // These are the real estate listings that will be shown to the user.
        // Normally we'd have these in a database instead.


        var locations = [
          {title: 'UJ Kingsway Auckland Campus', location: {lat: -26.18359, lng: 27.997681199999988}},
          {title: 'Wits Art Museum', location: {lat: -26.1929615, lng:28.033092799999963 }},
          {title: 'Ellis Park Stadium', location: {lat:-26.1975466, lng: 28.06088019999993}},
          {title: 'GoldReef City', location: {lat:-26.2360327 , lng: 28.013166700000056}}
        ];

        var largeInfowindow = new google.maps.InfoWindow();


        // Style the markers a bit. This will be our listing marker icon.
        var defaultIcon = makeMarkerIcon('0091ff');

        // Create a "highlighted location" marker color for when the user
        // mouses over the marker.
        var highlightedIcon = makeMarkerIcon('FFFF24');

        // The following group uses the location array to create an array of markers on initialize.
        for (var i = 0; i < locations.length; i++) {
          // Get the position from the location array.
          var position = locations[i].location;
          var title = locations[i].title;
          // Create a marker per location, and put into markers array.
          var marker = new google.maps.Marker({
            position: position,
            title: title,
            animation: google.maps.Animation.DROP,
            icon: defaultIcon,
            id: i
          });
          // Push the marker to our array of markers.
          markers.push(marker);
          // Create an onclick event to open the large infowindow at each marker.
          marker.addListener('click', function() {
            populateInfoWindow(this, largeInfowindow);
          });
          // Two event listeners - one for mouseover, one for mouseout,
          // to change the colors back and forth.
          marker.addListener('mouseover', function() {
            this.setIcon(highlightedIcon);
          });
          marker.addListener('mouseout', function() {
            this.setIcon(defaultIcon);
          });
        }

        document.getElementById('show-listings').addEventListener('click', showListings);
        document.getElementById('hide-listings').addEventListener('click', hideListings);

      }

      // This function populates the infowindow when the marker is clicked. We'll only allow
      // one infowindow which will open at the marker that is clicked, and populate based
      // on that markers position.
      function populateInfoWindow(marker, infowindow) {
        // Check to make sure the infowindow is not already opened on this marker.
        if (infowindow.marker != marker) {
          // Clear the infowindow content to give the streetview time to load.
          infowindow.setContent('');
          infowindow.marker = marker;
          // Make sure the marker property is cleared if the infowindow is closed.
          infowindow.addListener('closeclick', function() {
            infowindow.marker = null;
          });
          var streetViewService = new google.maps.StreetViewService();
          var radius = 50;
          // In case the status is OK, which means the pano was found, compute the
          // position of the streetview image, then calculate the heading, then get a
          // panorama from that and set the options
          function getStreetView(data, status) {
            if (status == google.maps.StreetViewStatus.OK) {
              var nearStreetViewLocation = data.location.latLng;
              var heading = google.maps.geometry.spherical.computeHeading(
                nearStreetViewLocation, marker.position);
                infowindow.setContent('<div>' + marker.title + '</div><div id="pano"></div>');
                var panoramaOptions = {
                  position: nearStreetViewLocation,
                  pov: {
                    heading: heading,
                    pitch: 30
                  }
                };
              var panorama = new google.maps.StreetViewPanorama(
                document.getElementById('pano'), panoramaOptions);
            } else {
              infowindow.setContent('<div>' + marker.title + '</div>' +
                '<div>No Street View Found</div>');
            }
          }
          // Use streetview service to get the closest streetview image within
          // 50 meters of the markers position
          streetViewService.getPanoramaByLocation(marker.position, radius, getStreetView);
          // Open the infowindow on the correct marker.
          infowindow.open(map, marker);
        }
      }

      // This function will loop through the markers array and display them all.
      function showListings() {
        var bounds = new google.maps.LatLngBounds();
        // Extend the boundaries of the map for each marker and display the marker
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
          bounds.extend(markers[i].position);
        }
        map.fitBounds(bounds);
      }

      // This function will loop through the listings and hide them all.
      function hideListings() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
      }

      // This function takes in a COLOR, and then creates a new marker
      // icon of that color. The icon will be 21 px wide by 34 high, have an origin
      // of 0, 0 and be anchored at 10, 34).
      function makeMarkerIcon(markerColor) {
        var markerImage = new google.maps.MarkerImage(
          'http://chart.googleapis.com/chart?chst=d_map_spin&chld=1.15|0|'+ markerColor +
          '|40|_|%E2%80%A2',
          new google.maps.Size(21, 34),
          new google.maps.Point(0, 0),
          new google.maps.Point(10, 34),
          new google.maps.Size(21,34));
        return markerImage;
      }

    </script>

    <script async defer
        src=
        "https://maps.googleapis.com/maps/api/js?key=AIzaSyDTnGcqMNAkoZRcSQSeqCUZLyu3MYeKywo&libraries=geometry&v=3&callback=initMap">
    </script>

  

 
