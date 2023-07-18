function initMap() {
    var mapElement = document.getElementById('map');
    var mapOptions = {
      center: { lat: -7.977348624835498, lng: 112.61289981349442 }, // Replace with the desired coordinates
      zoom: 15, // Adjust the zoom level as needed
    };
    var map = new google.maps.Map(mapElement, mapOptions);
  }