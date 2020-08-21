var markers = [];
var map;
$('#search-btn').on('click', function () {
    $('.notfoundlabel').hide();

    var searchVal = $('#search-input').val();

    if (searchVal == '') {
        alert('Please enter a search term.');
        return false;
    } else {
        $('#search-btn').prop('disabled', true);
        $('#loading').show();

        $.getJSON('https://maps.google.com/maps/api/geocode/json?address=' + searchVal + '&sensor=false&key=AIzaSyC1gLtynpOdw1XehaptfjtTwxApUdoelHQ', function (data) {
            $('#loading').hide();
            $('#search-btn').prop('disabled', false);

            if (data.status == "OK") {
                var geometry = data.results[0].geometry.location;

                if (geometry.lat && geometry.lng) {
                    $('#map-preview img').remove();
                    var map_url = 'https://maps.googleapis.com/maps/api/staticmap?size=459x150&center=' + geometry.lat + ',' + geometry.lng + '&zoom=11&markers=color:red|' + geometry.lat + ',' + geometry.lng + '';
                    $('#map-preview').append('<img src="' + map_url + '">');

                    $('.mapLat').val(geometry.lat);
                    $('.mapLng').val(geometry.lng);
                }
            } else {
                $('.notfoundlabel').show();
            }
        });
    }
});


