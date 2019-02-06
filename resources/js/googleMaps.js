const GoogleMapsLoader = require('google-maps');
const el = document.getElementById('map');
if (el !== null) {
  GoogleMapsLoader.KEY = 'AIzaSyDuW6NSkq7BeGO_j4EnjPomh51yWvEkATc';
  const options = {
    center: {lat: 45.240335, lng: 19.825559},
    zoom: 15
  };
  GoogleMapsLoader.load(function(google) {
    const map = new google.maps.Map(el, options);

    const marker = new google.maps.Marker({
      position: options.center,
      map: map,
      title: 'Waffle Magacin'
    });
  });
}