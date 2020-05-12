



// let data = new Date
// let dataLocal = data.toLocaleDateString();
// let horaLocal = data.toLocaleTimeString()

// let date = document.getElementById('txtData').value = dataLocal
// let hora = document.querySelector('#txtHora').value = horaLocal

// // selecionando elemento txtLocalizacao/ layoutForm.blade.php
// let tittle = document.getElementById('tittle')
// // let local = document.querySelector('#txtLocalizacao').value = "Não Informado"



// pegando a localizacao do usuario
// if ('geolocation' in navigator) {
//     navigator.geolocation.getCurrentPosition(function (position) {

//         console.log(position.coords.latitude)
//         console.log(position.coords.longitude)


//     }, function (error) {
//         console.log(error)
//     })
// } else {
//     alert('Não foi possivel obter sua localização')
// }


// Try HTML5 geolocation.
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (position) {
        var pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
        };


        // GOOGLE MAPS API
        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            },
            zoom: 18
        });
        var marker = new google.maps.Marker({
            position: {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            },
            map: map,
            draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox, 'places_changed', function () {

            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLongBounds();
            var i, place;

            for (i = 0; place = places[i]; i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location)
            }
            map.fitBounds(bounds);
            map.setZoom(15);

        });
        google.maps.event.addListener(marker, 'position_changed', function () {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#latitude').val(lat);
            $('#longitude').val(lng);
        });


        infoWindow.setPosition(pos);
        infoWindow.setContent('Location found.');
        infoWindow.open(map);
        map.setCenter(pos);
    }, function () {
        // handleLocationError(true, infoWindow, map.getCenter());
    });
} else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
}