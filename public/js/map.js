// AIzaSyD53pJ14IF3SSllwuXJNnqtSQ0rW9OaUkg

function initMap() {
    var hoju = { lat: -25.344 ,lng: 131.036 };
    var map = new google.maps.Map(
      document.getElementById('map'), {
        zoom: 4,
        center: hoju
      });
    var marker = new google.maps.Marker({position:hoju, map:map})
  }