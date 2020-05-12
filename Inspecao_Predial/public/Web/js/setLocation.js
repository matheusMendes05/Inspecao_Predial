var latitude = document.getElementById('latitude').innerText
var longitude = document.getElementById('longitude').innerText

var lat = parseFloat(latitude)
var lng = parseFloat(longitude)



var map = new google.maps.Map(document.getElementById('map'), {
    center: {
        lat: +lat,
        lng: +lng
    },
    zoom: 18
});

var marker = new google.maps.Marker({
    position: {
        lat: +lat,
        lng: +lng
    },
    map: map
});