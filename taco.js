/*Map*/
function initMap() {
    var uluru = {lat: 39.327648, lng: -76504817};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 4,
        center: uluru
    });
    
    var marker = new google.maps.Marker({
        position: uluru,
        map: map
    })
}

google.maps.event.addDomListener(window, 'load', initialize);


lat: 39.327648, lng: -76.504817