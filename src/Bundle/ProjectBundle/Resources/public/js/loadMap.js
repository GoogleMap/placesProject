var lat = $("#lat").val();
    var lng = $("#lng").val();
    var myCenter = new google.maps.LatLng(lat, lng);

    function initialize()
    {
        // get hidden 
        var storeName = $("#name").val();
        
        var mapProp = {
            center: myCenter,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter
        });

        marker.setMap(map);

        var infowindow = new google.maps.InfoWindow({
            content: storeName
        });

        infowindow.open(map, marker);
        
        $("#lati").html(lat);
        $("#lati").append("<b> / </b>");
        $("#lati").append(lng);
        
        // Zoom to 9 when clicking on marker
        google.maps.event.addListener(marker,'click',function() {
            map.setZoom(18);
            map.setCenter(marker.getPosition());
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);